<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['jabatan_id', 'nip', 'nama', 'thn_masuk', 'thn_keluar', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];
    protected $table = 'pegawais';

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }
}
