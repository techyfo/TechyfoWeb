<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }
    public function submitForm()
    {
        $this->validate();

        \App\Models\ContactForm::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Your message has been submitted successfully.');

        $this->reset();
    }
}
