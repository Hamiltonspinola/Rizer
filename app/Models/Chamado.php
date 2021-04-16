<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;
    protected $fillable=['assunto','descricao','data_abertura_chamado','status', 'vendedores_id'];

    public function vendedor(){
        return $this->belongsTo(Vendedor::class);
    }
    public function pivo(){
        return $this->hasOne(Pivo::class);
    }
}
