<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = ['username', 'password', 'nama', 'alamat', 'no_hp', 'id_poli'];

    public $timestamps = true;

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }

    public function jadwalPeriksa()
    {
        return $this->hasMany(JadwalPeriksa::class, 'id_dokter');
    }
    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class, 'id_dokter');
    }
}
