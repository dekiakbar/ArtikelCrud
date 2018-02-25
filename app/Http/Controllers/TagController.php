<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Kategori;
// use App\Http\Requests\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $data = Tag::join('kategori','tag.kategori_id','=','kategori.id')
                    ->select('*','tag.slug as slug','kategori.slug as kategori.slug')
                    ->paginate(10);
        $kategoris = Kategori::all();
        return view('admin.tag.Itag',compact('data','kategoris'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.tag.Ttag',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Tag::create($request->all());

        if ($data) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data tag berhasil disimpan');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data tag gagal disimpan');
        }

        return redirect('/tag');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::where('slug',$id)->firstOrFail();
        $kategoris = Kategori::all();
        return view('admin.tag.Etag',compact('tag','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Tag::where('slug',$id)->firstOrFail();
        $ubah->nama_tag = $request->input('nama_tag');
        $ubah->slug = $request->input('slug');
        $ubah->kategori_id = $request->input('kategori_id');

        if ($ubah->save()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data tag berhasil diubah');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data tag gagal diubah');
        }

        return redirect('tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Tag::where('slug',$id)->firstOrFail();
        
         if ($hapus->delete()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data tag berhasil dihapus');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data tag gagal dihapus');
        } 

        return redirect('tag');       
    }
}
