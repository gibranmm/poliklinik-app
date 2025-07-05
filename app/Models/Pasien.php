<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = ['username', 'password', 'nama', 'alamat', 'no_ktp', 'no_hp', 'no_rm'];

    public function daftarPoli()
    {
        return $this->hasMany(DaftarPoli::class, 'id_pasien');
    }
    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class, 'id_pasien');
    }
}
