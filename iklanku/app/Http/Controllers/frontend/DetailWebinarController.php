<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DetailWebinarController extends Controller
{

    public function index($id)
    {
        $webinar = DB::table('tb_webinar')->where('id',$id)->first();
        return view('frontend.layouts.detailwebinar', compact('webinar'));
    }

}