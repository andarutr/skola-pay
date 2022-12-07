<?php

namespace App\Http\Livewire\Admin\Account;

use Livewire\Component;
use Livewire\WithPagination;

class LinkedAccount extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public $statusPage = 'main';

    public $id_user, $id_parent;
    
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
            'id_user' => 'required|unique:linked_account',
            'id_parent' => 'required|unique:linked_account'
        ]);

        $create = \DB::table('linked_account')
                        ->insert([
                            'id_user' => $this->id_user,
                            'id_parent' => $this->id_parent,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);

        $this->reset();

        session()->flash('success','Berhasil linked account!');
    }

    public function render()
    {
        $linked_user = \DB::table('linked_account')
                            ->join('users','linked_account.id_user','=','users.id')
                            ->orderByDesc('id_linked')
                            ->paginate($this->paginate);

        $linked_parent = \DB::table('linked_account')
                            ->join('users','linked_account.id_parent','=','users.id')
                            ->orderByDesc('id_linked')
                            ->paginate($this->paginate);

        $option_parents = \DB::table('users')
                                ->orderByDesc('id')
                                ->where('id_role', 3)
                                ->get();

        $option_users = \DB::table('users')
                                ->orderByDesc('id')
                                ->where('id_role', 2)
                                ->get();

        return view('livewire.admin.account.linked-account', compact('linked_user','linked_parent','option_parents','option_users'));
    }

    public function destroy($id)
    {
        $delete = \DB::table('linked_account')
                        ->where('id_linked',$id)
                        ->delete();

        session()->flash('success','Berhasil menghapus linked account!');
    }
}
