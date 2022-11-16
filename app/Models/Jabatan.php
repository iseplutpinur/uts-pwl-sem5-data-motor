<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $fillable = ['divisi_id', 'nama', 'jml_pgw'];
    protected $table = 'jabatans';

    public function pegawais()
    {
        return $this->hasMany(Pegawai::class, 'jabatan_id', 'id');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }
}
