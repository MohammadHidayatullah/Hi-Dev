<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function konfirmasiL($id){
        DB::table('tb_loker')->where('id', $id)->update([
            'status' => 1,
        ]);
        return redirect()->route('loker.index')->with('success', 'Data Loker Telah dikonfirmasi');
    }
}
