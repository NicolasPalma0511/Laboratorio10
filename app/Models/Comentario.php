<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function User()
        {
            return $this->belongsTo(User::class);
        }
    public function Fotos()
        {
            return $this->belongsTo(Fotos::class);
        }
}
