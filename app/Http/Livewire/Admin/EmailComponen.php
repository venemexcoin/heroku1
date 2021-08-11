<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Email;

class EmailComponen extends Component
{
    public function render()
    {
        $emails = Email::paginate(12); 
        return view('livewire.admin.email-componen',['emails'=>$emails])->layout('layouts.blanco');
    }
}
