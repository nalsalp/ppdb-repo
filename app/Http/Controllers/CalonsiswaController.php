<?php

namespace App;

use Illuminate\Http\Request;
use App\Calonsiswa;
class CalonsiswaController extends Controller
{
    public function index()
    {
    return "F O R M U L I R";
    }
    public function create (){
        return view('form-pendaftaran');
    }
    public function store(Request $request){

        $validateData = $request->validate([
            'nik'=>'required',
            'nama'=>'required|min:3|max:60',
            'nama_panggilan'=>'required',
            'email'=>'required',
            'jk'=>'required',
            'ttl'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'nisn'=>'required',
            'jurusan1'=>'required',
            'jurusan2'=>'required',
            'agama'=>'required',
            'tinggi'=>'required',
            'berat'=>'required',
            'umur'=>'required',
            'riwayat_penyakit'=>'required',
            'cita_cita'=>'required',
            'hobi'=>'required',
            'no_telp'=>'required',
            'anak_ke'=>'required',
            'status'=>'required',
            'golongan_darah'=>'required',
            'suku'=>'required',
            'prestasi'=>'required',
            'bakat'=>'required',
            'nama_ayah'=>'required|min:3|max:60',
            'pekerjaan_ayah'=>'required',
            'asal_ayah'=>'required',
            'lulusan_ayah'=>'required',
            'agama_ayah'=>'required',
            'usia_ayah'=>'required',
            'ttl_ayah'=>'required',
            'no_telp_ayah'=>'required',
            'penghasilan_ayah'=>'required',
            'nama_ibu'=>'required|min:3|max:60',
            'pekerjaan_ibu'=>'required',
            'asal_ibu'=>'required',
            'lulusan_ibu'=>'required',
            'agama_ibu'=>'required',
            'usia_ibu'=>'required',
            'ttl_ibu'=>'required',
            'no_telp_ibu'=>'required',
            'penghasilan_ibu'=>'required',
            'fto_kk'=>'required',

        ]);
        dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->nik = $validateData['nik'] ;
        $calonsiswa->nama = $validateData['nama'] ;
        $calonsiswa->nama_panggilan = $validateData['nama_panggilan'] ;
        $calonsiswa->email = $validateData['email'] ;
        $calonsiswa->jk = $validateData['jk'] ;
        $calonsiswa->ttl = $validateData['ttl'] ;
        $calonsiswa->alamat = $validateData['alamat'] ;
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'] ;
        $calonsiswa->nisn = $validateData['nisn'] ;
        $calonsiswa->jurusan1 = $validateData['jurusan1'] ;
        $calonsiswa->jurusan2 = $validateData['jurusan1'] ;
        $calonsiswa->agama = $validateData['agama'] ;
        $calonsiswa->tinggi = $validateData['tinggi'] ;
        $calonsiswa->berat = $validateData['berat'] ;
        $calonsiswa->umur = $validateData['umur'] ;
        $calonsiswa->riwayat_penyakit = $validateData['riwayat_penyakit'] ;
        $calonsiswa->cita_cita = $validateData['cita_cita'] ;
        $calonsiswa->hobi = $validateData['hobi'] ;
        $calonsiswa->no_telp = $validateData['no_telp'] ;
        $calonsiswa->anak_ke = $validateData['anak_ke'] ;
        $calonsiswa->status = $validateData['status'] ;
        $calonsiswa->golongan_darah = $validateData['golongan_darah'] ;
        $calonsiswa->suku = $validateData['suku'] ;
        $calonsiswa->prestasi = $validateData['prestasi'] ;
        $calonsiswa->bakat = $validateData['bakat'] ;
        $calonsiswa->nama_ayah = $validateData['nama_ayah'] ;
        $calonsiswa->pekerjaan_ayah = $validateData['pekerjaan_ayah'] ;
        $calonsiswa->asal_ayah = $validateData['asal_ayah'] ;
        $calonsiswa->lulusan_ayah = $validateData['lulusan_ayah'] ;
        $calonsiswa->agama_ayah = $validateData['agama_ayah'] ;
        $calonsiswa->usia_ayah = $validateData['usia_ayah'] ;
        $calonsiswa->ttl_ayah = $validateData['ttl_ayah'] ;
        $calonsiswa->no_telp_ayah = $validateData['no_telp_ayah'] ;
        $calonsiswa->penghasilan_ayah = $validateData['penghasilan_ayah'] ;

        $calonsiswa->nama_ibu = $validateData['nama_ibu'] ;
        $calonsiswa->pekerjaan_ibu = $validateData['pekerjaan_ibu'] ;
        $calonsiswa->asal_ibu = $validateData['asal_ibu'] ;
        $calonsiswa->lulusan_ibu = $validateData['lulusan_ibu'] ;
        $calonsiswa->agama_ibu = $validateData['agama_ibu'] ;
        $calonsiswa->usia_ibu = $validateData['usia_ibu'] ;
        $calonsiswa->ttl_ibu = $validateData['ttl_ibu'] ;
        $calonsiswa->no_telp_ibu = $validateData['no_telp_ibu'] ;
        $calonsiswa->penghasilan_ibu = $validateData['penghasilan_ibu'] ;
        $calonsiswa->fto_kk = $validateData['fto_kk'] ;
        $calonsiswa->save();

        return" YES Berhasil Masuk Di DataBase";
    }
}