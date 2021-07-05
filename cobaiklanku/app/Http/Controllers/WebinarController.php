<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class WebinarController extends Controller
{
    public function index()
    {
        $webinar = DB::table('tb_webinar')->get();
        return view('backend.webinar.index', compact('webinar'));
    }
    public function create()
    {
        $webinar = null;
        return view('backend.webinar.create', compact('webinar'));
    }
    public function store(Request $request)
    {
        if ($request->hasfile('pamflet')) {
            $pamflet = $request->file('pamflet');
            $namapamflet = $pamflet->getClientOriginalName();
            $pathpamflet = $pamflet->move('images/webinar', $namapamflet);
        DB::table('tb_webinar')->insert([
            'pamflet_webinar' => $namapamflet,
            'judul_webinar' => $request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'link'=>$request->link
        ]);
        }
            return redirect()->route('webinar.index')
                             ->with('success', 'Data webinar baru telah disimpan');
        }
                             public function edit($id)
                             {
                                 $webinar = DB::table('tb_webinar')->where('id', $id)->first();
                                 return view('backend.webinar.create', compact('webinar'));
                             }
                             public function show($id)
                             {
                                 $webinar = DB::table('tb_webinar')->where('id', $id)->first();
                                 return view('backend.webinar.5', compact('webinar'));
                             }
                             public function update(Request $request)
                             {
                                $pamflet = $request->file('pamflet');
                                $namapamflet = $pamflet->getClientOriginalName();
                                $pathpamflet = $pamflet->move('images/webinar', $namapamflet);
                                 DB::table('tb_webinar')->where('id', $request->id)->update([
                                    'pamflet_webinar' => $namapamflet,
                                    'judul_webinar' =>$request->judul,
                                    'deskripsi'=>$request->deskripsi,
                                    'deadline'=>$request->deadline,
                                    'link'=>$request->link
                                 ]);
                                 return redirect()->route('webinar.index')
                                                  ->with('success','data webinar Berhasil di Perbarui');
                             }
                             public function destroy($id)
                             {
                                 DB::table('tb_webinar')->where('id', $id)->delete();
                                 return redirect()->route('webinar.index')
                                                  ->with('success', 'Data webinar Kerja Berhasil DiHapus');
                             }
                             public function active($id){
                                 DB::table('tb_webinar')->where('id', $id)->update([
                                     'status'=>1
                                 ]);
                                 return redirect()->route('webinar.index')
                                                ->with('success','Iklan sudah aktif!');
                             }
                             public function nonactive($id)
                             {
                                 DB::table('tb_webinar')->where('id', $id)->update([
                                     'status'=>0
                                 ]);
                                 return redirect()->route('webinar.index')
                                                ->with('success','Iklan sudah aktif!');
                             }
}
