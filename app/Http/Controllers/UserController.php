<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use app\Models\User;

class UserController extends Controller
{
    public function eximp()
    {
        $users = User::get();
        return view('eximp.eximpusers', compact('users'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));
        return back();
    }
}

