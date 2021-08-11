<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Email;

class PortafolioComponent extends Component
{
    public $name;
    public $company;
    public $email;
    public $phone;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields,[

            'name'    => 'required',
            'company' => 'required',
            'email'   => 'required|email',
            'phone'  => 'required|numeric|min:10 max:10',
            'message' => 'required'
        ]);

    }
    
    public function sendMenssage() {

        $this->validate([
            'name'    => 'required',
            'company' => 'required',
            'email'   => 'required|email',
            'phone'  => 'required|number|min:10 max:10',
            'message' => 'required'
        ]);

        $contact = new Email();
        $contact->name = $this->name;
        $contact->company = $this->company;
        $contact->email   = $this->email;
        $contact->phone  = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Thanks,Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.portafolio-component')->layout('layouts.base');
    }
}
