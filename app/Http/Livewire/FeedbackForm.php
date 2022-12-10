<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class FeedbackForm extends Component
{
    public $name;
    public $email;
    public $pesan;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'pesan' => 'required'
    ];

    public function submit()
    {
        $this->validate();
        
        // Create Feedback
        $feedback = Feedback::create([
                        'name_feedback' => $this->name,
                        'email_feedback' => $this->email,
                        'pesan_feedback' => $this->pesan
                    ]);
        
        $this->reset();
        
        $this->emit('successFeedback', $feedback);
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
