<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
	protected $table = 'mobil';
    protected $primaryKey = 'kode_mobil';
    protected $keyType = 'string';
    public $timestamps = false;

    public function jadwalkeberangkatan()
    {
        return $this->hasOne('App\JadwalKeberangkatan','jadwalkeberangkatan');
    }

    public function kursi()
    {
        return $this->hasMany('App\Kursi','kursi');
    }
}
