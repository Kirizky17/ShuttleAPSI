<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    protected $table = 'kursi';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function mobil()
    {
        return $this->belongsTo('App\Mobil','kd_mobil');
    }
}
