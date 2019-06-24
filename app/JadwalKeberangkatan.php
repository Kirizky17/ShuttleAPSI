<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKeberangkatan extends Model
{
    protected $table = 'jadwal_keberangkatan';
    protected $primaryKey = 'kode_jadwal';
    protected $keyType = 'string';
    public $timestamps = false;

    public function asal()
    {
        return $this->hasOne('App\Pool', 'foreign_key');
    }

    public function tujuan()
    {
        return $this->hasOne('App\Pool', 'foreign_key');
    }
}
