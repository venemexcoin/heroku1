<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminHomeComponet extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-home-componet')->layout('layouts.blanco');
    }
}
