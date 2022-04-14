<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanData extends Model
{
    use HasFactory;
    protected $guarded = [];
    function tematik()
    {
        return $this->belongsTo(Tematik::class, 'tematik_id', 'id');
    }
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'tematik_id', 'tematik_id');
    }
    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
