<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\artikelReq;

use App\Artikel;
use App\Kategori;
use App\Tag;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artikels = Artikel::join('kategori','artikel.kategori_id','=','kategori.id')
                    ->select('*','artikel.slug as slug','kategori.slug as ketegori_slug')
                    ->paginate(10);

        return view('admin.artikel.Iartikel',compact('artikels'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.artikel.Tartikel',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(artikelReq $request)
    {
        $tag='';
        if ($request->hasFile('foto')) {

            $foto   = $request->file('foto');
            $nama   = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/foto');
            $status = $foto->move($lokasi, $nama);

            $tag    = implode(",", $request->input('tag'));

            $data   = Artikel::create([

                'judul'             =>$request->input('judul'),
                'kutipan'           => $request->input('kutipan'),
                'slug'              => $request->input('slug'),
                'kategori_id'       => $request->input('kategori'),
                'tag_id'            => $tag,
                'isi'               => $request->input('artikel'),
                'meta_keyword'      => $request->input('meta_keyword'),
                'meta_deskripsi'    => $request->input('meta_deskripsi'),
                'foto'              => $nama,
                'status'            => $request->input('status')

            ]);

            if ($data && $status) {
                session()->flash('status','Sukses');
                session()->flash('pesan','Data Artikel berhasil dibuat');
            }else{
                session()->flash('status','Gagal');
                session()->flash('pesan','Data Artikel gagal dibuat');
            }
            return redirect('admin/artikel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $artikel  = Artikel::with('kategori')
                    ->where('artikel.slug',$slug)
                    ->firstOrFail();
        $tags     = Tag::all();

        return view('admin.artikel.Dartikel',compact('artikel','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $artikel    = Artikel::join('kategori','artikel.kategori_id','=','kategori.id')
                        ->select('*','artikel.slug as slug','kategori.slug as ketegori_slug')
                        ->where('artikel.slug',$slug)
                        ->firstOrFail();
        $kategoris  = Kategori::all();
        $tags       = Tag::all();
        $tagArtikel = explode(',',$artikel->tag_id);

        return view('admin.artikel.Eartikel',compact('artikel','kategoris','tagArtikel','tags'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $tag      = implode(",", $request->input('tag'));

        $dataFoto = Artikel::where('slug',$slug)
                    ->select('foto')
                    ->firstOrFail();

        if ($request->input('banding') != $dataFoto->foto) {
            $foto   = $request->file('foto');
            $nama   = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/foto');
            $status =$foto->move($lokasi, $nama);
            @unlink(public_path('storage/foto/'.$dataFoto->foto));
        }else{
            $nama   =$request->input('banding');
        }

        $update                 = Artikel::where('slug',$slug)->firstOrFail();
        $update->judul          = $request->input('judul');
        $update->kutipan        = $request->input('kutipan');
        $update->slug           = $request->input('slug');
        $update->kategori_id    = $request->input('kategori');
        $update->tag_id         = $tag;
        $update->isi            = $request->input('artikel');
        $update->meta_keyword   = $request->input('meta_keyword');
        $update->meta_deskripsi = $request->input('meta_deskripsi');
        $update->foto           = $nama;
        $update->status         = $request->input('status');

        if ($update->save()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data Artikel berhasil diubah');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data Artikel gagal diubah');
        }

        return redirect('admin/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $hapus = Artikel::where('slug',$slug)->firstOrFail();

        if ($hapus->delete()) {
            session()->flash('status','Sukses');
            session()->flash('pesan','Data tag berhasil dihapus');
        }else{
            session()->flash('status','Gagal');
            session()->flash('pesan','Data tag gagal dihapus');
        } 
    }

    public function cari(Request $request)
    {
        $cari       = $request->input('cari');
        $artikels   = Artikel::join('kategori','artikel.kategori_id','=','kategori.id')
                        ->select('*','artikel.slug as slug','kategori.slug as ketegori_slug')
                        ->where('judul','LIKE','%'.$cari.'%')
                        ->paginate(10);

        return view('admin.artikel.Iartikel',compact('artikels'))->with('no',($request->input('page',1)-1)*10);
    }
}
