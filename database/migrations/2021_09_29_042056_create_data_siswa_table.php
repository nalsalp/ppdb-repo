<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_leng');
            $table->string('nama_pang');
            $table->string('email');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat_ktp');
            $table->string('alamat_tinggal');
            $table->string('asal_sklh');
            $table->string('j_1');
            $table->string('j_2');
            $table->string('kewarganegaraan');
            $table->string('agama');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('umur');
            $table->string('riwayat_peny');
            $table->string('cita_cita');
            $table->string('hobi');
            $table->integer('no_telp');
            $table->integer('anak_ke');
            $table->string('status_anak');
            $table->string('gol_darah');
            $table->string('suku');
            $table->string('prestasi');
            $table->string('bakat');
            $table->string('pel_disukai');
            $table->string('nik');
            $table->string('nisn');
            $table->string('ijazah');
            $table->binary('akta');
            $table->binary('kk');
            $table->binary('foto_diri');
            $table->binary('foto_rumah');
            $table->binary('foto_kel');
            $table->binary('kis');
            $table->binary('kip');
            $table->binary('sks');
            $table->binary('skb');   
            $table->binary('spp_sek');
            $table->binary('sktm');
            $table->string('biaya_saudara');
            $table->string('nama_ayh');
            $table->string('nama_ibu');
            $table->string('pek_ayh');
            $table->string('pek_ibu');
            $table->string('asal_ayh');
            $table->string('asal_ibu');
            $table->string('pend_ayh');
            $table->string('pend_ibu');
            $table->string('tempat_lahir_ayh');
            $table->string('tempat_lahir_ibu');
            $table->string('tgl_lahir_ayh');
            $table->string('tgl_lahir_ibu');
            $table->string('agama_ayh');
            $table->string('agama_ibu');
            $table->string('usia_ayh');
            $table->string('usia_ibu');
            $table->string('no_telp_ibu');
            $table->string('no_telp_ayh');
            $table->string('peng_ayh');
            $table->string('peng_ibu');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
}
