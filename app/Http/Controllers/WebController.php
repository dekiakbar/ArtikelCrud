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
    	$artikels = Artikel::paginate(5);

    	return view('web.index',compact('tags','kategoris','barus','artikels'))->with('no',($request->input('page',1)-1)*5);
    }
}
