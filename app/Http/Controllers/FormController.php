<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama_leng'=>'required|min:3|max:60',
            'nama_pang'=>'required',
            'email'=>'required',
            'jk'=>'required',
            'tempat_tinggal'=>'required',
            'tgl_lahir'=>'required',
            'alamat_ktp'=>'required',
            'alamat_tinggal'=>'required',
            'asal_sklh'=>'required',
            'j_1'=>'required',
            'j_2'=>'required',
            'kewarganegaraan'=>'required',
            'agama'=>'required',
            'tinggi_badan'=>'required',
            'berat_badan'=>'required',
            'umur'=>'required',
            'riwayat_peny'=>'required',
            'cita_cita'=>'required',
            'hobi'=>'required',
            'no_telp'=>'required',
            'anak_ke'=>'required',
            'status_anak'=>'required',
            'gol_darah'=>'required',
            'suku'=>'required',
            'prestasi'=>'required',
            'bakat'=>'required',
            'pel_disukai'=>'required',
            'nik'=>'required',
            'nisn'=>'required',
            'ijazah'=>'required',
            'akta'=>'required',
            'foto_diri'=>'required',
            'foto_rumah'=>'required',
            'foto_keluarga'=>'required',
            'kis'=>'required',
            'kip'=>'required',
            'sks'=>'required',
            'skb'=>'required',
            'spp_sek'=>'required',
            'sktm'=>'required',
            'biaya_saudara'=>'required',


            'nama_ayh'=>'required|min:3|max:60',
            'nama_ibu'=>'required|min:3|max:60',
            'pek_ayh'=>'required',
            'pek_ibu'=>'required',
            'asal_ayh'=>'required',
            'asal_ibu'=>'required',
            'pend_ayh'=>'required',
            'pend_ibu'=>'required',
            'tempat_lahir_ayh'=>'required',
            'tempat_lahir_ibu'=>'required',
            'tgl_lahir_ayh'=>'required',
            'tgl_lahir_ibu'=>'required',
            'agama_ayh'=>'required',
            'agama_ibu'=>'required',
            'usia_ayh'=>'required',
            'usia_ibu'=>'required',
            'no_telp_ayh'=>'required',
            'no_telp_ibu'=>'required',
            'peng_ayh'=>'required',    
            'peng_ibu'=>'required',
            

        ]);

        return view('proses',['data' => $request]);
    }
}
