<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jml_pgw'];
    protected $table = 'divisis';

    public function jabatans()
    {
        return $this->hasMany(Jabatan::class, 'divisi_id', 'id');
    }

    public function pegawais()
    {
        return $this->hasManyThrough(Pegawai::class, Jabatan::class, 'divisi_id', 'jabatan_id');
    }
}
