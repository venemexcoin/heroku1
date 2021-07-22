<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PortafolioComponent extends Component
{
    public function render()
    {
        return view('livewire.portafolio-component')->layout('layouts.base');
    }
}
