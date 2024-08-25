<?php

namespace App\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterSubscription extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:newsletters',
    ];
    public function render()
    {
        return view('livewire.newsletter-subscription');
    }
    public function subscribe()
    {
        $this->validate();
        Newsletter::create(['email' => $this->email]);
        session()->flash('success', 'You have successfully subscribed to the newsletter.');
        $this->reset();
    }
}
