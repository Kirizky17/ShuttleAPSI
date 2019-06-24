<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
	protected $table = 'partner';
    protected $primaryKey = 'kode_partner';
    protected $keyType = 'string';
    public $timestamps = false;

    public function shuttle()
    {
        return $this->hasOne('App\JadwalKeberangkatan','shuttle');
    }
}
