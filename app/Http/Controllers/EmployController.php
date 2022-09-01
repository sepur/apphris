<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Models\Cabang;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;

class EmployController extends Controller
{
    public function index(Request $request) 
    {
         if ($request->has('search')) {
            $cabs = Cabang::All();

	    $employes = Karyawan::query()
            ->where('nama_lengkap', 'like', '%'.$request->search.'%')
	    ->latest()->paginate(20);
            return view('employ.index', compact('employes','cabs')); 
	 }
	 #else {
         #   $cabs = Cabang::All();
         #   $employes = Karyawan::latest()->paginate(20);             
	 #   return view('employ.index', compact('employes','cabs'));
        #}
	#return view('employ.index', compact('employes'));

	if ($request->has('report')) {
            $this->validate($request, [
            'cabang' => 'required',
            'format'=> 'required',
            ]);
	    if($request->format=='view'){
		$cabs = Cabang::All();
		$employes = Karyawan::select('*')->where('fk_cabang', '=', $request->cabang)->paginate(100);
		#Karwayan::where('fk_cabang', [$request->cabang])->get();
                return view('employ.index', compact('employes','cabs'));
            }
            if($request->format=='excel'){
                $employes = Karyawan::where('fk_cabang','=', [$request->cabang])->get();
                $cabang = $request->cabang;
                return (new EmployeesExport($employes,$cabang))->download('employees.xlsx');#membuat excel
            }
            if($request->format=='pdf'){
                $cabang = $request->cabang;
		$employes = Karyawan::where('fk_cabang','=',  [$request->cabang])->get();
                $pdf = \PDF::loadView('employ.report_employ', compact('employes','cabang'));
                return $pdf->download('data_karyawan.pdf');
            }
        }
	else {
               $cabs = Cabang::All();
               $employes = Karyawan::latest()->paginate(20);             
               return view('employ.index', compact('employes','cabs'));
        }
    }

    public function detail($id)
    {
        $employes =  Karyawan::findorfail($id);
        $lm =  Pelamar::where('fk_user', $employes->fk_user)->get()->last();
        return view('employ.detailemploy', compact('employes','lm'));
    } 
}
