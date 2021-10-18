<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\soal;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }

    public function crud()
    {
      return view('crud.admin');
    }
    public function store(Request $request)
    {
      $masuk = DB::table('soals')->insert([
        'judul_tes' => $request->input('judul'),
        'id' => $request->input('id'),
        'soal' => $request->input('soal'),
        'opsi1' => $request->input('opsi1'),
        'opsi2' => $request->input('opsi2'),
        'opsi3' => $request->input('opsi3'),
        'opsi4' => $request->input('opsi4')
      ]);
      $masuk->save();
      return redirect('/preview')->with('success', 'Soal Berhasil Ditambahkan');
    }
    public function preview()
    {
      $dataz = DB::table("soals")->count('id');
      $data = DB::table('soals')->get();
      return view('crud.preview', ['data' => $data], ['dataz' => $dataz]);
    }
    public function create()
    {
      return view('crud.admin');
    }

    public function destroy()
    {
        $delete = DB::table('soals')->delete();
        return redirect('/preview')->with('success', 'Semua Soal Berhasil Dihapus');
    }
    //buat hapus soal yang dipilih
    public function destroys($id)
    {
      DB::table('soals')->where('id', $id)->delete();
      return redirect('/preview')->with('success', 'Soal Telah Dihapus');
    }
    public function edit($id)
    {
        $soal = DB::table('soals')->where('id', $id)->first();
        return view('crud.edit', compact('soal'));
    }


}
