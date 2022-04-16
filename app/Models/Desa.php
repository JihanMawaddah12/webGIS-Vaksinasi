<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $guarded =[];
    function data1()
    {
        return $this->hasMany(HalamanData::class, 'desa_id', 'id');
    }
}
