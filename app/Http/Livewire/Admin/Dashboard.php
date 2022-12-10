<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $users = User::orderByDesc('id')
                    ->join('roles','users.id_role','=','roles.id_role')
                    ->limit(8)
                    ->get();

        $user_count = User::count();

        return view('livewire.admin.dashboard', compact('users','user_count'));
    }
}
