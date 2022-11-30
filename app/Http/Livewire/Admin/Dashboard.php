<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $users = \DB::table('users')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->orderByDesc('id')
                        ->limit(8)
                        ->get();
        $user_count = \DB::table('users')->count();

        return view('livewire.admin.dashboard', compact('users','user_count'));
    }
}
