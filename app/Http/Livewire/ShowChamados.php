<?php

namespace App\Http\Livewire;

use App\Models\Chamado;
use Livewire\Component;

class ShowChamados extends Component
{
    public function render()
    {
        $chamados = Chamado::get();
        dd($chamados);
        return view('livewire.show-chamados', compact('chamados')); 
    }
}
