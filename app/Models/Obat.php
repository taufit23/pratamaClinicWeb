<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function resep_obat()
    {
        return $this->belongsToMany(ResepObat::class);
    }
}
