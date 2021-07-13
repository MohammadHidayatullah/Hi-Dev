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
        if ($request->hasfile('pamflet')) {
            $pamflet = $request->file('pamflet');
            $namapamflet = $pamflet->getClientOriginalName();
            $pathpamflet = $pamflet->move('images/webinar', $namapamflet);
        DB::table('tb_webinar')->insert([
            'pamflet_webinar' => $namapamflet,
            'judul_webinar' => $request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'link'=>$request->link,
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
                                 $messages = [
                                     'required' => 'Input :attribute wajib diisi!',
                                     'min' => 'Input :attribute harus diisi minimal :min karakter!',
                                     'max' => 'Input :attribute harus diisi maksimal :max karakter!',
                                     'mimes' => 'Input : attribute harus berbentuk png,jpg,jpeg!',
                                     'url' => 'Input : attribute harus berupa url!',
                                 ];

                                 $this->validate($request,[
                                     'pamflet_webinar' => 'required|mimes:png,jpg,jpeg',
                                     'judul_webinar' => 'required|min:2|max:5',
                                     'deskripsi' => 'required|min:10|max:25',
                                     'deadline' => 'required',
                                     'link' => 'required|url'
                                 ], $messages);

                                 $pamflet_webinar =  $request->input('pamflet');
                                 $judul_webinar = $request->input('judul_webinar');
                                 $deskripsi = $request->input('deskripsi');
                                 $deadline = $request->input('dealine');
                                 $link = $request->input('link');

                                 return "pamflet : ".$pamflet_webinar.", judul_webinar : ".$judul_webinar.
                                 ", deskripsi : ".$deskripsi.", deadline : ".$deadline.", link : ".$link;


                             }
}
