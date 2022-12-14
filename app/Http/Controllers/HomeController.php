<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () {
        $title="Merchant | yeah!";
        $packages=[(object)[
            'kode_paket'=>'Kode Dummy',
            'paket_name'=>'Nama Dummy',
            'paket_des'=>'Des Dummy'
        ],(object)[
            'kode_paket'=>'Kode Dummy 2',
            'paket_name'=>'Nama Dummy 3',
            'paket_des'=>'Des Dummy 4'
        ]];
        return view('frontpage.dashboard', compact('title','packages'));
    }

    public function check () {
        return view('frontpage.checkout');
    }

    public function final () {
        return view('frontpage.final');
    }
}
