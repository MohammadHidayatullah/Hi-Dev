<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DetailLokerController extends Controller
{

    public function index($id)
    {
        $loker = DB::table('tb_loker')->where('id',$id)->first();
        return view('frontend.layouts.detailloker', compact('loker'));
    }

}