<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //
    protected $table='penggajians';
    protected $fillable=['id','tunjangan_pegawai_id','jumlah_jam_lembur','jumlah_uang_lembur','gaji_pokok','tanggal_pengembalian','status_pengambilan','petugas_penerima'];

}
