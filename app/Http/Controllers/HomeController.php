<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use App\Http\Requests\gantiPasReq;
use Auth;
use App\Artikel;
use App\Tag;
use App\Kategori;
use App\User;

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
        $tags       = Tag::all();
        $kategoris  = Kategori::all();
        $artikels   = Artikel::all();

        return view('admin.index',compact('tags','kategoris','artikels'));
    }

    public function gantiPas(gantiPasReq $request)
    {
        $id     = $request->input('adadeh');
        $user   = User::find($id);

        if (!(Hash::check($request->get('pasLama'), Auth::user()->password))) {
            
            session()->flash('status','Gagal');
            session()->flash('pesan','Password lama salah');
            return redirect('admin/');
        }else{
            if ($request->input('pasBaru') == $request->input('pasBaruCek') ) {
                
                $user->name = $request->input('nama');
                $user->email = $request->input('email');
                $user->password = bcrypt($request->input('pasBaru'));

                if ($user->save()) {
                    
                    session()->flash('status','Sukses');
                    session()->flash('pesan','Password berhasil diubah');
                    return redirect('admin/');
                }
            }else{
                
                session()->flash('status','Gagal');
                session()->flash('pesan','Password baru tidak sama');
                return redirect('admin/');
            }
        }
    }
}
