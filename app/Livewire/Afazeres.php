<?php

namespace App\Livewire;

use Livewire\Component;

class Afazeres extends Component
{
    
    public $afazer = "";
    public $afazeres = ["Tirar o lixo", "Lavar a louça"];

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
