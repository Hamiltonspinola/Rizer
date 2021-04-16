<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'assunto', 'status', 'qtd_chamados_aberto', 'qtd_chamados_andamento', 'qtd_chamados,resolvido', 'chamados_id'];

    public function chamados(){
        return $this->hasMany(Chamado::class);
    }
}
