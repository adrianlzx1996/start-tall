<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Log;

class LandingPage extends Component
{

    public $email = 'test@test.com';

    public function subscribe()
    {
        $subscriber = Subscriber::create([
            'email' => $this->email,
        ]);

        $this->resetInput();
    }

    public function render()
    {
        return view('livewire.landing-page');
    }

    public function resetInput()
    {
        $this->reset('email');
    }
}
