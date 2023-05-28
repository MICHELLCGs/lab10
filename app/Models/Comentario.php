<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsto(User::class);
    }
    public function Fotos(){
        return $this->belongsto(Foto::class);
    }
}
