<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.artikel.Tartikel',compact('tags','kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag='';
        if ($request->hasFile('foto')) {

            $foto = $request->file('foto');
            $nama = time().'.'.$foto->getClientOriginalExtension();
            $lokasi = public_path('/storage/foto');
            $statusUpload=$foto->move($lokasi, $nama);

            $tag= implode(",", $request->input('tag'));

            $data = Artikel::create([

                'judul' =>$request->input('judul'),
                'kutipan' => $request->input('kutipan'),
                'slug' => $request->input('slug'),
                'kategori_id' => $request->input('kategori'),
                'tag_id' => $tag,
                'isi' => $request->input('artikel'),
                'meta_keyword' => $request->input('meta_keyword'),
                'meta_deskripsi' => $request->input('meta_deskripsi'),
                'foto' => $nama,
                'status' => $request->input('status')

            ]);

            if ($data && $statusUpload) {
                session()->flash('status','Sukses');
                session()->flash('pesan','Data Artikel berhasil disimpan');
            }else{
                session()->flash('status','Gagal');
                session()->flash('pesan','Data Artikel gagal disimpan');
            }
            return redirect('admin/artikel/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::join('kategori','artikel.kategori_id','=','kategori.id')
                    ->select('*','artikel.slug as slug','kategori.slug as ketegori_slug')
                    ->firstOrFail();
        $tags = Tag::all();

        return view('admin.artikel.Dartikel',compact('artikel','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
