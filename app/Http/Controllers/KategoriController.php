<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;
use App\Http\Requests\kategoriReq;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Kategori::paginate(10);
        return view('admin.kategori.Ikategori',compact('data'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.Tkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(kategoriReq $request)
    {
        $data = Kategori::create($request->all());

        if ($data) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data kategori berhasil disimpan');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data kategori gagal disimpan');
        }
        return redirect('admin/kategori');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::where('slug','=',$id)->firstOrFail();
        return view('admin.kategori.Ekategori', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(kategoriReq $request, $id)
    {
        $update                 = Kategori::where('slug',$id)->firstOrFail();
        $update->nama_kategori  = $request->input('nama_kategori');
        $update->slug           = $request->input('slug');
        
        if ($update->save()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data kategori berhasil disimpan');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data kategori gagal disimpan');
        }

        return redirect('admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Kategori::where('slug',$id)->firstOrFail();
        if ($hapus->delete()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data tag berhasil dihapus');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data tag gagal dihapus');
        } 
    }

    public function cari(Request $request){
        $cari = $request->get('cari');
        $data = Kategori::where('nama_kategori','LIKE','%'.$cari.'%')->orWhere('slug','LIKE','%'.$cari.'%')->paginate(10);
        return view('admin.kategori.Ikategori',compact('data'))->with('no',($request->input('page',1)-1)*10);
    }
}
