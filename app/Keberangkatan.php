<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keberangkatan extends Model
{
    protected $table = 'keberangkatan';
    protected $primaryKey = 'kode_keberangkatan';
    protected $keyType = 'string';
    public $timestamps = false;

    public function jadwal()
    {
        return $this->belongsTo('App\JadwalKeberangkatan','jadwal');
    }
}
