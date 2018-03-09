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
use App\Tamu;

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
        $tags       = Tag::count();
        $kategoris  = Kategori::count();
        $artikels   = Artikel::count();
        $tamus      = Tamu::count();

        /*
        |--------------------------------------------------------------------------
        | Logika Grafik Pengunjung
        |--------------------------------------------------------------------------
        |
        */
            $label  = array();
            $tamu   = array();
            $data   = Tamu::orderBy('created_at', 'asc')
                            ->get()
                            ->groupBy(function($date){
                                return $date->created_at->format('F,Y');
                            });

            foreach ($data as $key => $value) {
                $label[]    = $key;
                $tamu[]     = $data->get($key)->count();
            }
    
            $chart = app()->chartjs
                    ->name('grafikTamu')
                    ->type('line')
                    ->size(['width' => 400, 'height' => 200])
                    ->labels($label)
                    ->datasets([
                        [
                            "label" => "Data Pengunjung",
                            'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                            'borderColor' => "rgba(38, 185, 154, 0.7)",
                            "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                            "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                            "pointHoverBackgroundColor" => "#fff",
                            "pointHoverBorderColor" => "rgba(220,220,220,1)",
                            'data' => $tamu,
                        ]
                    ])
                    ->options([]);
        
        /*
        |--------------------------------------------------------------------------
        | Logika OS Pengunjung
        |--------------------------------------------------------------------------
        |
        */
            $labelOS = array();
            $tamuOS  = array();
            $dataOS = Tamu::orderBy('created_at', 'asc')
                            ->get()
                            ->groupBy(function($os){
                                return $os->os;
                            });
            foreach ($dataOS as $key => $value) {
                $labelOS[]  = $key;
                $tamuOS[]   = $dataOS->get($key)->count();
            }

            $grafikOS = app()->chartjs
                    ->name('grafikOS')
                    ->type('pie')
                    ->size(['width' => 400, 'height' => 200])
                    ->labels($labelOS)
                    ->datasets([
                        [
                            'backgroundColor' => ['#FF6384', '#36A2EB'],
                            'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                            'data' => $tamuOS
                        ]
                    ])
                    ->options([]);     
                         
        return view('admin.index',compact('tags','kategoris','artikels','tamus','chart','grafikOS'));
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
