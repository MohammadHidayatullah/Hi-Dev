<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AddLokerController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.addloker');
    }
    public function create()
    {
        return view('frontend.layouts.addloker');
    }
    public function store(Request $request)
    {
        if ($request->hasfile('pamflet')) {
            $pamflet = $request->file('pamflet');
            $namapamflet = $pamflet->getClientOriginalName();
            $pathpamflet = $pamflet->move('images/loker', $namapamflet);
        DB::table('tb_loker')->insert([
            'pamflet_loker' => $namapamflet,
            'judul_loker' => $request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'link'=>$request->link,
            'status'=>0,
        ]);
        }
            return redirect()->route('listloker')
                             ->with('success', 'Data loker baru telah disimpan');
        }
                             public function edit($id)
                             {
                                 $webinar = DB::table('tb_loker')->where('id', $id)->first();
                                 return view('backend.loker.create', compact('loker'));
                             }
                             public function show($id)
                             {
                                 $webinar = DB::table('tb_loker')->where('id', $id)->first();
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
                                 return redirect()->route('listloker')
                                                  ->with('success','data loker Berhasil di Perbarui');
                             }
                             public function destroy($id)
                             {
                                 DB::table('tb_loker')->where('id', $id)->delete();
                                 return redirect()->route('listloker')
                                                  ->with('success', 'Data loker Kerja Berhasil DiHapus');
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
                                    'pamflet_loker' => 'required|mimes:png,jpg,jpeg',
                                    'judul_loker' => 'required|min:2|max:5',
                                    'deskripsi' => 'required|min:10|max:25',
                                    'deadline' => 'required',
                                    'link' => 'required|url'
                                ], $messages);

                                $pamflet_loker =  $request->input('pamflet');
                                 $judul_loker = $request->input('judul_loker');
                                 $deskripsi = $request->input('deskripsi');
                                 $deadline = $request->input('dealine');
                                 $link = $request->input('link');

                                 return "pamflet : ".$pamflet_loker.", judul_loker : ".$judul_loker.
                                 ", deskripsi : ".$deskripsi.", deadline : ".$deadline.", link : ".$link;

                            }
}
