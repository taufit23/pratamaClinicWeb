<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Sanctum\HasApiTokens;

class RekamMedis extends Model
{
    protected $guarded = [];
    protected function keluhan(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function diagnosa(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function jenisPenyakit(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
    public function layanan()
    {
        return $this->belongsToMany(Layanan::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
