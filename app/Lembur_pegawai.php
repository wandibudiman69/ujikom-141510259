<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur_pegawai extends Model
{
    protected $table='lembur_pegawais';
    protected $fillable=['id','kode_limbur_id','pegawai_id','Jumlah_jam'];

    public function pegawai(){
    	return $this->belongsTo('App\Pegawai','pegawai_id');
    }
    public function kategori(){
    	return $this->belongsTo('App\Kategori_lembur','kode_limbur_id');
    }
}
