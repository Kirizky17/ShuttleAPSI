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
        return $this->belongsTo('App\Pool', 'keberangkatan');
    }

    public function tujuan()
    {
        return $this->belongsTo('App\Pool', 'tujuan');
    }

    public function partner()
    {
        return $this->belongsTo('App\Partner', 'shuttle');
    }

    public function mobil()
    {
        return $this->belongsTo('App\Mobil', 'mobil');
    }

    public function keberangkatan()
    {
        return $this->hasOne('App\Keberangkatan');
    }
}
