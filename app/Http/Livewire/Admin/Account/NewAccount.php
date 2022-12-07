<?php

namespace App\Http\Livewire\Admin\Account;

use Livewire\Component;
use Livewire\WithPagination;

class NewAccount extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;
    public $statusPage = 'main';

    public $name, $username, $id_role;

    public function backToMain()
    {
        $this->statusPage = 'main';
    }

    public function createPage()
    {
        $this->statusPage = 'create';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'id_role' => 'required'
        ]);

        $create = \DB::table('users')
                        ->insert([
                            'name' => $this->name,
                            'username' => $this->username,
                            'password' => bcrypt('smkpbs2'),
                            'id_role' => $this->id_role,
                            'picture' => 'user.png',
                            'id_kelas' => 16,
                            'updated_at' => now(),
                            'created_at' => now()
                        ]);

        $this->reset();
        
        session()->flash('success','Berhasil menambahkan akun!');
    }

    public function render()
    {
        $users = \DB::table('users')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->orderByDesc('id')
                        ->paginate($this->paginate);

        $search = \DB::table('users')
                        ->where('name','like','%'.$this->search.'%')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->paginate($this->paginate);

        return view('livewire.admin.account.new-account', [
            'users' => $this->search === null ? $users : $search]);
    }
}
