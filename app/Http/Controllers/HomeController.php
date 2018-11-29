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
    public function listvideo(Request $request)
    {
        $kategori = $request->query('kt1');
        $link = DB::table('listvideo')->select('link')->where('judul', 'LIKE', '%'.$kategori.'%')->get();

        return view('utama',['link'=>$link]);
    }
}
