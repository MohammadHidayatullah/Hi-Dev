<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::user()) {
            # code...
            $this->middleware('auth');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $loker = DB::table('tb_loker')->where('status','=',1)->get();
        $webinar = DB::table('tb_webinar')->where('status','=',1)->get();
        return view('frontend/home', compact('webinar', 'loker'));
    }
    

}
