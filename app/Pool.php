<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    protected $table = 'pool';
    protected $primaryKey = 'kode_pool';
    protected $keyType = 'string';
    public $timestamps = false;

    public function keberangkatan()
    {
        return $this->hasOne('App\JadwalKeberangkatan','keberangkatan');
    }

    public function tujuan()
    {
        return $this->hasOne('App\JadwalKeberangkatan','tujuan');
    }
}
