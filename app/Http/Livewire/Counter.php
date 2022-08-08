<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increments()
    {
        $this->count ++;
    }

    public function decrements()
    {
        $this->count --;
    }

    public function render()
    {
        return view('livewire.counter',['counter' => $this->count ]);
    }
}
