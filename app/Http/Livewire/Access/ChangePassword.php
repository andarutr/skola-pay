<?php

namespace App\Http\Livewire\Access;

use Auth;
use App\Models\User;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password, $new_password, $password_confirmation;

    public function changePassword()
    {
        $this->validate([
            'old_password' => 'required|min:6',
            'new_password' => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        if(Auth::attempt(['username' => Auth::user()->username, 'password' => $this->old_password]))
        {
            User::where('username',Auth::user()->username)
                            ->update([
                                'password' => \Hash::make($this->new_password)
                            ]);
            $this->reset();
            session()->flash('success','Berhasil memperbarui password!');
        }else{
            $this->reset();
            session()->flash('failed','Password anda salah!');
        }
    }

    public function render()
    {
        return view('livewire.access.change-password');
    }
}
