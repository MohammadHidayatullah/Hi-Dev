<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LokerAPIController extends Controller
{
    public function index()
    {
        $loker = DB::table('tb_loker')->where(['status' => 1])->get();
        return response()->json($loker, 201);
    }

    public function show($id)
    {
        $loker = DB::table('tb_loker')->where(['id' => $id, 'status' => 1])->get();
        return response()->json($loker, 201);
    }
}
