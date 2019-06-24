<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    protected $table = 'pool';
    protected $primaryKey = 'kode_pool';
    protected $keyType = 'string';
    public $timestamps = false;
}
