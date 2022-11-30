<?php

namespace App\Http\Livewire\Access;

use Auth;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password, $new_password, $password_confirmation;

    public function changePassword()
    {
        $this->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        if(Auth::attempt(['username' => Auth::user()->username, 'password' => $this->old_password]))
        {
            $update_data = \DB::table('users')
                            ->where('username',Auth::user()->username)
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
