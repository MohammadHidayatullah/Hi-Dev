<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ListLokerController extends Controller
{

    public function index()
    {
        $loker = DB::table('tb_loker')->simplePaginate(8);
        return view('frontend.layouts.listloker', compact('loker'));
    }

}