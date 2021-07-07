<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class WebinarAPIController extends Controller
{
    public function index (){
        $webinar = DB::table('tb_webinar')->get();
        return response()->json($webinar, 201);
    }

    public function show ($id){
        $webinar = DB::table('tb_webinar')->where('id',$id)->get();
        return response()->json($webinar, 201);
    }
}
