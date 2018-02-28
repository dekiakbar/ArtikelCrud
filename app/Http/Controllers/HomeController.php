<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artikel;
use App\Tag;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $kategoris = Kategori::all();
        $artikels = Artikel::all();

        return view('admin.index',compact('tags','kategoris','artikels'));
    }
}
