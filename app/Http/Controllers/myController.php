<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orang_tua;
class myController extends Controller
{
    //
    public function index()
    {
    	$a = "Krisna Purnama";
    	return $a;
    }

    public function tampilmodel()
    {
    	$ortu=orang_tua::all();
    	return $ortu;
    }

    public function tampilView()
    {
    	return view('about');
    }

    public function percobaan()
    {
    	$ortu = orang_tua::all();
    	return view('index', compact('ortu'));
    }
}
