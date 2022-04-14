<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanData2 extends Model
{
    use HasFactory;
    protected $guarded = [];
    function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
    function tematik()
    {
        return $this->belongsTo(Tematik::class, 'tematik_id', 'id');
    }
}
