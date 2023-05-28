<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsto(User::class);
    }
    public function Comentarios(){
        return $this->hasmany(Comentario::class);
    }
}
