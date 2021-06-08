<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class LokerController extends Controller
{
    public function index()
    {
        $loker = DB::table('tb_loker')->get();
        return view('backend.loker.index', compact('loker'));
    }
    public function create()
    {
        $loker = null;
        return view('backend.loker.create', compact('loker'));
    }
    public function store(Request $request)
    {
        
        if ($request->hasfile('pamflet')) {
            $pamflet = $request->file('pamflet');
            $namapamflet = $pamflet->getClientOriginalName();
            $pathpamflet = $pamflet->move('images/loker', $namapamflet);
        DB::table('tb_loker')->insert([
            'pamflet_loker' => $namapamflet,
            'judul_loker' =>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'link'=>$request->link
        ]);
        }
            return redirect()->route('loker.index')
                             ->with('success', 'Data loker baru telah disimpan');
        }
                             public function edit($id)
                             {
                                 $loker = DB::table('tb_loker')->where('id', $id)->first();
                                 return view('backend.loker.create', compact('loker'));
                             }
                             public function show($id)
                             {
                                 $loker = DB::table('tb_loker')->where('id', $id)->first();
                                 return view('backend.loker.5', compact('loker'));
                             }
                             public function update(Request $request)
                             {
                                 DB::table('tb_loker')->where('id', $request->id)->update([
                                    'pamflet_loker' => $request->pamflet,
                                    'judul_loker' =>$request->judul,
                                    'deskripsi'=>$request->deskripsi,
                                    'deadline'=>$request->deadline,
                                    'link'=>$request->link
                                 ]);
                                 return redirect()->route('loker.index')
                                                  ->with('success','data loker Berhasil di Perbarui');
                             }
                             public function destroy($id)
                             {
                                 DB::table('tb_loker')->where('id', $id)->delete();
                                 return redirect()->route('loker.index')
                                                  ->with('success', 'Data loker Kerja Berhasil DiHapus');
                             }
}
