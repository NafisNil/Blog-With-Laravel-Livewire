<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
   /* public function __cinstruct()
    {
        # code...
        return $this->middleware('auth');
    }*/
    public function index()
    {
        # code...
        return view('home.index');
    }
}
