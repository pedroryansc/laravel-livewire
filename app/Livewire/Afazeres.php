<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Afazeres")]
class Afazeres extends Component
{
    
    public $afazer = "";
    public $afazeres = [];

    // Ganchos de ciclo de vida (Lifecycle Hook)

    public function mount(){
        $this->afazeres = ["Tirar o lixo", "Lavar a louça"];
    }

    public function updatedAfazer($value){
        $this->afazer = strtoupper($value);
    }

    public function adicionar(){
        // dd("Hello there");

        if($this->afazer != ""){
            $this->afazeres[] = $this->afazer;
            
            $this->reset("afazer");
        }
    }

    public function render()
    {
        return view('livewire.afazeres');
    }
}
