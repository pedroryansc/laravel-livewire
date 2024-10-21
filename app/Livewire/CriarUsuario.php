<?php

namespace App\Livewire;

use App\Models\Usuario;
use App\Models\Setor;

use Livewire\Component;
use Livewire\Attributes\Rule;

class CriarUsuario extends Component
{

    #[Rule("required", message: "Este campo deve ser preenchido.")]
    public $nome = "";

    #[Rule("required", message: "Este campo deve ser preenchido.")]
    public $email = "";

    #[Rule("required", message: "Este campo deve ser preenchido.")]
    public $senha = "";

    #[Rule("required", message: "Este campo deve ser preenchido.")]
    public $dataNascimento = "";

    #[Rule("required", message: "Este campo deve ser preenchido.")]
    public $setor_id = 0;
    
    public function cadastrar(){
        $this->validate();

        $usuario = new Usuario();

        $usuario->nome = $this->nome;
        $usuario->email = $this->email;
        $usuario->senha = $this->senha;
        $usuario->dataNascimento = $this->dataNascimento;
        $usuario->setor_id = $this->setor_id;

        $usuario->save();

        $this->redirect("/usuarios");
    }
    
    public function render()
    {
        return view('livewire.criar-usuario', ["setores" => Setor::all()]);
    }
}
