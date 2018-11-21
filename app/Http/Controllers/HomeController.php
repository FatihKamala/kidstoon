<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function listvideo($id)
    {
        $link = DB::table('listvideo')->get();
        //$link= 'nyoba bos';
        //$link = ['fatih ', 'Kamala ', 'Nurika'];
        return view('utama',['link'=>$link]);
    }
}
