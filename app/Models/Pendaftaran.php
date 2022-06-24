<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = [];
    function data2()
    {
        return $this->belongsTo(HalamanData2::class, 'halaman_data2_id', 'id');
    }
}
