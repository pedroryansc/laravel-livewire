<?php

namespace App\Livewire;

use App\Models\Usuario;

use Livewire\Component;

class PesquisaUsuario extends Component
{

    public $pesquisa = "";

    public function render()
    {
        return view('livewire.pesquisa-usuario', [
            "usuarios"=>Usuario::where("nome", "like", value: "%".$this->pesquisa."%")->get()
        ]);
    }
}
