<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use DB;

class ListWebinarController extends Controller
{

    public function index()
    {
        $webinar = DB::table('tb_webinar')->where('status','=',1)->simplePaginate(8);
        return view('frontend.layouts.listwebinar', compact('webinar'));
    }

}