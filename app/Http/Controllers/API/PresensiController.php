<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PresensiResource;
use App\Models\Presensi;
use Illuminate\Support\Facades\Validator;
use App\Models\Karyawan;
use App\Models\User;
use DateTime;
class PresensiController extends Controller
{
    public function index()
    {
        $date_now = new DateTime( date('Y-m-d'));
        $prs= Presensi::with('preskaryawan.jabatan')->where('tanggal', '=',$date_now)->get();
	#$kar = Karyawan::all();
	#return response()
        #    ->json(['nama' => $prs]);
	return new PresensiResource(true, 'List Data Presensi', $prs);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
	    'nik' => 'required',
	    'image_masuk' => 'required|image|mimes:jpeg,png,jpg,webp|max:50480',
	    'latitude' => 'nullable',
	    'longitude' => 'nullable',
	    #'tanggal'  => 'nullable',
	]);
	if ($validator->fails()){
	    return response()->json($validator->errors(),422);
	}

	$jam_masuk = $request->jam_masuk;
	$id_karyawan = Karyawan::where('nomor_induk_karyawan', $request->nik)->get()->last();

	$cv = $request->file('image_masuk');
	$extcv = $request->file('image_masuk')->getClientOriginalExtension();
	$CvName = $request->nik.'_'.date('Y-m-d_H:i:s').'.'.'png';
	$cv->storeAs('presensi', $CvName);	
	$ayeuna = new DateTime( date('Y-m-d H:i:s') );
	$date_now = new DateTime( date('Y-m-d'));
 

        $prsn = Presensi::create([
            'image_masuk' => $CvName,
	    'jam_masuk'  => $ayeuna,
	    'id_user' => $id_karyawan->fk_user,
	    'latitude' => $request->latitude,
	    'longitude' => $request->longitude,
	    'tanggal' => $date_now,
	    'id_karyawan' => $id_karyawan->id,
        ]);
        return new PresensiResource(true, 'Data Presensi Berhasil Ditambahkan!', $prsn);
    }

	public function getpresensi($id)
	{
		#$prs = Presensi::all();
		$user = User::where('id', $id)->first();
		$prs = Presensi::where('id_user', $id)->get();
		if ($user) {
			return new PresensiResource(true, 'List Data Presensi', $prs);
		} else {
			return response()
				->json(['message' => 'Data Tidak Ditemukan', 'code' => 'Error1'], 401);
		}
	}	
}
