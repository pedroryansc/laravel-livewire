<?php

namespace App\Livewire;

use App\Models\Usuario;

use Livewire\Component;

class Usuarios extends Component
{

    public function excluir(Usuario $usuario){
        $usuario->delete();
    }

    public function render()
    {
        return view('livewire.usuarios', ["usuarios" => Usuario::all()]);
    }
}
