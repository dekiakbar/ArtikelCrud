<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Kategori;
use App\Artikel;
use DB;
use App\Tamu;
use Browser;

use Chencha\Share\ShareFacade as Share;

class WebController extends Controller
{
    //setting nama domain dan quote share
    public $nama_domain;
    public $quote_share;
    
    public function __construct()
    {
    	$this->nama_domain = config('app.url');
	$this->quote_share = config('app.name');
    }
    public function tampil(Request $request)
    {
    	$tags      = Tag::all();
    	$kategoris = Kategori::all();
    	$barus     = Artikel::where('status','release')->latest()->take(3)->get();
    	$artikels  = Artikel::with('kategori')->where('status','release')->paginate(5);

        $bagikan   = Share::load($this->nama_domain, $this->quote_share)
                        ->services('facebook','twitter','linkedin','telegram');
        $bagikan   = (object) $bagikan;

        Tamu::create([
            'user' => Browser::userAgent(),
            'browser' => Browser::browserName(),
            'os' => Browser::platformFamily(),
        ]); 

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function kategori(Request $request, $slug)
    {
    	$tags      = Tag::all();
    	$kategoris = Kategori::all();
    	$barus     = Artikel::latest()->take(3)->get();
    	$artikels  = Artikel::join('kategori','artikel.kategori_id','kategori.id')
    				->select('*','artikel.slug as slug','kategori.slug as kategori_slug')
    				->where('kategori.slug',$slug)->paginate(5);

        $bagikan   = Share::load($this->nama_domain.'kategori/'.$slug, $this->quote_share)
                        ->services('facebook','twitter','linkedin','telegram');
        $bagikan   = (object) $bagikan;

        Tamu::create([
            'user' => Browser::userAgent(),
            'browser' => Browser::browserName(),
            'os' => Browser::platformFamily(),
        ]); 

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function tag(Request $request, $slug)
    {
        $idTag     = Tag::where('slug',$slug)->firstOrFail();
    	$tags      = Tag::all();
    	$kategoris = Kategori::all();
    	$barus     = Artikel::where('status','release')->latest()->take(3)->get();
    	$artikels  = Artikel::select('*')
                        ->whereRaw('FIND_IN_SET('.$idTag->id.',tag_id)')
                        ->where('status','release')
                        ->paginate(5);

        $bagikan   = Share::load($this->nama_domain.'tag/'.$idTag->slug, $this->quote_share)
                            ->services('facebook','twitter','linkedin','telegram');
        $bagikan   = (object) $bagikan;

        Tamu::create([
            'user' => Browser::userAgent(),
            'browser' => Browser::browserName(),
            'os' => Browser::platformFamily(),
        ]); 

    	return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function cari(Request $request)
    {
        $cari       = $request->input('cari');
	
        $tags       = Tag::all();
        $kategoris  = Kategori::all();
        $barus      = Artikel::where('status','release')->latest()->take(3)->get();
	$artikels   = Artikel::select('kutipan','slug','judul','created_at','tag_id','kategori_id','foto')
                            ->orwhereHas('kategori', function($query) use($cari) {
                                $query->where('nama_kategori', 'like', '%'.$cari.'%');
                            })
                            ->orWhereHas('tag', function($query) use($cari) {
                                $query->where('nama_tag', 'like', '%'.$cari.'%');
			    })
                            ->orWhere("judul", "LIKE","%".$cari."%")
                            ->where('status','release')
                            ->orderBy('created_at', 'desc')
                            ->paginate(5);

        $bagikan    = Share::load($this->nama_domain, $this->quote_share)
                            ->services('facebook','twitter','linkedin','telegram');
        $bagikan    = (object) $bagikan;

        Tamu::create([
            'user' => Browser::userAgent(),
            'browser' => Browser::browserName(),
            'os' => Browser::platformFamily(),
        ]); 

        return view('web.index',compact('bagikan','tags','kategoris','barus','artikels'))
                ->with('no',($request->input('page',1)-1)*5);
    }

    public function detail($slug)
    {
        $tags       = Tag::all();
        $kategoris  = Kategori::all();
        $barus      = Artikel::where('status','release')->latest()->take(3)->get();
        $artikel    = Artikel::with('kategori')->where('artikel.slug',$slug)->where('status','release')->firstOrFail();

        $bagikan    = Share::load($this->nama_domain.'detail/'.$slug, $this->quote_share)
                            ->services('facebook','twitter','linkedin','telegram');
        $bagikan    = (object) $bagikan;

        Tamu::create([
            'user' => Browser::userAgent(),
            'browser' => Browser::browserName(),
            'os' => Browser::platformFamily(),
        ]); 

        return view('web.detail',compact('bagikan','tags','kategoris','barus','artikel'));
    }
}
