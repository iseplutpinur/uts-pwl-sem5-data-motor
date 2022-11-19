<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    protected $table = 'mereks';

    public function motors()
    {
        return $this->hasMany(Motor::class, 'merek_id', 'id');
    }
}
