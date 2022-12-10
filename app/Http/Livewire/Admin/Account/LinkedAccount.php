<?php

namespace App\Http\Livewire\Admin\Account;

use App\Models\User;
use Livewire\Component;
use App\Models\LinkedUser;
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

        LinkedUser::create([
                        'id_user' => $this->id_user,
                        'id_parent' => $this->id_parent
                    ]);

        $this->reset();

        session()->flash('success','Berhasil linked account!');
    }

    public function render()
    {
        $linked_user = LinkedUser::orderByDesc('id_linked')
                                    ->join('users','users.id','=','linked_account.id_user')
                                    ->paginate($this->paginate);

        $linked_parent = LinkedUser::orderByDesc('id_linked')
                                    ->join('users','users.id','=','linked_account.id_parent')
                                    ->paginate($this->paginate);

        $option_parents = User::orderByDesc('id')
                                ->where('id_role', 3)
                                ->get();

        $option_users = User::orderByDesc('id')
                                ->where('id_role', 2)
                                ->get();

        return view('livewire.admin.account.linked-account', compact('linked_user','linked_parent','option_parents','option_users'));
    }

    public function destroy($id)
    {
        LinkedUser::where('id_linked',$id)
                    ->delete();

        session()->flash('success','Berhasil menghapus linked account!');
    }
}
