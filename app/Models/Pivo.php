<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivo extends Model
{
    use HasFactory;

    public function chamado(){
        return $this->belongsTo(Chamado::class);
    }
}
