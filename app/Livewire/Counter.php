<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;

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
