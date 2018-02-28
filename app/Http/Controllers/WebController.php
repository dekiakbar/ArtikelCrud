<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Kategori;
use App\Artikel;

class WebController extends Controller
{
    public function tampil(Request $request)
    {
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::with('kategori')->paginate(5);

    	return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }

    public function kategori(Request $request, $slug)
    {
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::join('kategori','artikel.kategori_id','kategori.id')
    				->select('*','artikel.slug as slug','kategori.slug as kategori_slug')
    				->where('kategori.slug',$slug)->paginate(5);

    	return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }

    public function tag(Request $request, $slug)
    {
        $idTag = Tag::where('slug',$slug)->get();
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::join('tag','artikel.tag_id','tag.id')
                            ->select('*','artikel.slug as slug','tag.slug as tag_slug')
                            ->where('tag.slug',$slug)
                            ->paginate(5);

    	return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $tags = Tag::all();
        $kategoris = Kategori::all();
        $barus = Artikel::latest()->take(3)->get();
        $artikels = Artikel::select('kutipan','slug','judul','created_at','tag_id','kategori_id')
                          ->whereHas('kategori', function($query) use($cari) {$query->where('nama_kategori', 'like', '%'.$cari.'%');})
                          ->orWhereHas('tag', function($query) use($cari) {$query->where('nama_tag', 'like', '%'.$cari.'%');})
                          ->orWhere("judul", "LIKE","%$cari%")->orderBy('created_at', 'desc')->paginate(5);

        return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }
}
