<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $fillable = ['merek_id', 'nama', 'harga'];
    protected $table = 'motors';

    public function merek()
    {
        return $this->belongsTo(Merek::class, 'merek_id', 'id');
    }
}
