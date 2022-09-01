<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apllyloker;
use App\Models\Cabang;
use App\Models\Pelamar;
use App\Models\Loker;

class HomeController extends Controller
{
    public function index()
    {
        $cabs = Cabang::get();
        $uss = Pelamar::all()->first();
        $loks = Loker::all();
        $list = Apllyloker::take(50)->latest()->get();
        return view('home.index', compact('list', 'loks', 'uss', 'cabs'));
    }
}