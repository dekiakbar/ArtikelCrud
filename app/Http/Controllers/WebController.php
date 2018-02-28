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
    	$tags = Tag::all();
    	$kategoris = Kategori::all();
    	$barus = Artikel::latest()->take(3)->get();
    	$artikels = Artikel::join('tag','artikel.tag_id','tag.id')
    				->select('*','artikel.slug as slug','tag.slug as tag_slug')
    				->where('tag.slug',$slug)->paginate(5);

    	return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }
}
