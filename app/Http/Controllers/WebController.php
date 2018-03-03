<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Kategori;
use App\Artikel;
use DB;

use Chencha\Share\ShareFacade as Share;

class WebController extends Controller
{
    public function tampil(Request $request)
    {
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::with('kategori')->paginate(5);

        $bagikan  = Share::load('http://localhost:8000/', 'Artikel Laravel')
                    ->services('facebook','twitter','linkedin','telegram');
        $bagikan  = (object) $bagikan;

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function kategori(Request $request, $slug)
    {
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::join('kategori','artikel.kategori_id','kategori.id')
    				->select('*','artikel.slug as slug','kategori.slug as kategori_slug')
    				->where('kategori.slug',$slug)->paginate(5);

        $bagikan  = Share::load('http://localhost:8000/kategori/'.$slug, 'Artikel Laravel')
                    ->services('facebook','twitter','linkedin','telegram');
        $bagikan  = (object) $bagikan;

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function tag(Request $request, $slug)
    {
        $idTag = Tag::where('slug',$slug)->firstOrFail();
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::select('*')
                    ->whereRaw('FIND_IN_SET('.$idTag->id.',tag_id)')
                    ->paginate(5);

        $bagikan  = Share::load('http://localhost:8000/tag/'.$idTag->slug, 'Artikel Laravel')
                    ->services('facebook','twitter','linkedin','telegram');
        $bagikan  = (object) $bagikan;

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $tags = Tag::all();
        $kategoris = Kategori::all();
        $barus = Artikel::latest()->take(3)->get();
        $artikels = Artikel::select('kutipan','slug','judul','created_at','tag_id','kategori_id','foto')
                          ->whereHas('kategori', function($query) use($cari) {$query->where('nama_kategori', 'like', '%'.$cari.'%');})
                          ->orWhereHas('tag', function($query) use($cari) {$query->where('nama_tag', 'like', '%'.$cari.'%');})
                          ->orWhere("judul", "LIKE","%$cari%")->orderBy('created_at', 'desc')->paginate(5);

        $bagikan  = Share::load('http://localhost:8000/', 'Artikel Laravel')
                    ->services('facebook','twitter','linkedin','telegram');
        $bagikan  = (object) $bagikan;

        return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function detail($slug)
    {
        $tags = Tag::all();
        $kategoris = Kategori::all();
        $barus = Artikel::latest()->take(3)->get();
        $artikel = Artikel::with('kategori')->where('artikel.slug',$slug)->firstOrFail();

        $bagikan  = Share::load('http://localhost:8000/detail/'.$slug, 'Artikel Laravel')
                    ->services('facebook','twitter','linkedin','telegram');
        $bagikan  = (object) $bagikan;

        return view('web.detail',compact('bagikan','tags','kategoris','barus','artikel'));
    }
}
