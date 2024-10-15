<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Contador")]
class Counter extends Component // Componente "Counter"
{

    public $count = 1; // Propriedade (Properties)

    // Ações (Actions)

    public function incrementar($num){
        $this->count += $num;
    }

    public function decrementar(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
