<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Email;

class EmailComponen extends Component
{
    public function render()
    {
        $emails = Email::all(); 
        return view('livewire.admin.email-componen',['email'=>$emails])->layout('layouts.blanco');
    }
}
