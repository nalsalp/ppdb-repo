<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

 
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;

use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Export;
use App\Http\Controllers\Controller;

 

class AuthController extends Controller
{
    
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string',
           
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
            
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { 

            return redirect()->route('home');
 
        } else {

            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
 
    }
 
    public function showFormRegister()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
            'fto_bukti'             => 'required'
        ];
 
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password',
            'fto_bukti'             => 'foto harus di upload'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        
        $fto_bukti=$request->file('fto_bukti');
        $filename = $fto_bukti->getClientOriginalName();
        $destination = public_path('img/buktitransfer');
        $fto_bukti->move($destination,$filename);

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->no_telp =$request->no_telp;
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->fto_bukti =$filename;

        $simpan = $user->save();
 
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }
 
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
 
    public function tampil(){
        $user = User::all();
        return view('lihat',compact('user'));
    }
    public function userexport(){
        return Excel::download(new UserExport,'user.xlsx');
    }
}