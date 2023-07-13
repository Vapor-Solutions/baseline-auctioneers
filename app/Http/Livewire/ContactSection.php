<?php

namespace App\Http\Livewire;

use App\Jobs\SendContactDetailsJob;
use App\Mail\SendContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactSection extends Component
{
    public $name, $email, $subject, $body;

    protected $rules = [
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'body'=>'required',
    ];

    function send()
    {
        $this->validate();

        SendContactDetailsJob::dispatch(new SendContactEmail([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'body' => $this->body,
        ]));

        $this->emit('done', [
            'success'=>'Successfully sent your contact details'
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-section');
    }
}
