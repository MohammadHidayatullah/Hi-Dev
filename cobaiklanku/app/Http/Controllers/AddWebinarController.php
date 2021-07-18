<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AddWebinarController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.addwebinar');
    }
    public function create()
    {
        return view('frontend.layouts.addwebinar');
    }
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Input :attribute wajib diisi!',
            'min' => 'Input :attribute harus diisi minimal :min karakter!',
            'mimes' => 'Input : attribute harus berbentuk png,jpg,jpeg!',
        ];

        $this->validate($request,[
            'pamflet' => 'required|mimes:png,jpg,jpeg',
            'judul' => 'required|min:10',
            'deskripsi' => 'required|min:25',
            'deadline' => 'required',
            'link' => 'required'
        ], $messages);

        if ($request->hasfile('pamflet')) {
            $pamflet = $request->file('pamflet');
            $namapamflet = $pamflet->getClientOriginalName();
            $pathpamflet = $pamflet->move('images/webinar', $namapamflet);
        DB::table('tb_webinar')->insert([
            'pamflet_webinar' => $namapamflet,
            'judul_webinar' => $request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'link'=>"http://".$request->link,
            'status'=>0,
        ]);
        }
            return redirect()->route('listwb')
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
                                 DB::table('tb_webinar')->where('id', $request->id)->update([
                                    'pamflet_webinar' => $request->pamflet,
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
                             public function proses(Request $request){


                                 $listwb = new Listwb();
                                 $listwb->judul_webinar = $request->judul;
                                 $listwb->deskripsi_webinar = $request->deskripsi;
                                 $listwb->deadline_webinar = $request->deadline;
                                 $listwb->link_webinar = $request->link;
                                 $gambar = $request->pamflet_webinar;
                                 $gambarName = $gambar->getClietOriginalName();
                                 $gambar->move(public_path('images/webinar'),$gambarName);
                                 $gambar->pamflet_webinar = $gambarName;
                                 $listwb->save();

                                 return redirect()->route('webinar.index')->with('success', 'Data Webinar Anda Berhasil di Simpan');


                             }
}
