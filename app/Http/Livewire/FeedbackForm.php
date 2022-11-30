<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        
        $feedback = \DB::table('feedback')->insert([
                        'name_feedback' => $this->name,
                        'email_feedback' => $this->email,
                        'pesan_feedback' => $this->pesan,
                        'updated_at' => now(),
                        'created_at' => now()
                    ]);
        
        $this->reset();
        
        $this->emit('successFeedback', $feedback);
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
