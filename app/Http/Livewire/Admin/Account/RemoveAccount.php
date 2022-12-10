<?php

namespace App\Http\Livewire\Admin\Account;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RemoveAccount extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;
    public $statusPage = 'main';

    public function destroy($id)
    {
        User::where('id',$id)
                ->delete();
                        
        session()->flash('success', 'Berhasil menghapus data!');
    }

    public function render()
    {
        $users = User::orderByDesc('id')
                        ->join('roles','roles.id_role','=','users.id_role')
                        ->join('kelas','kelas.id_kelas','=','users.id_kelas')
                        ->paginate($this->paginate);

        $search = User::orderByDesc('id')
                        ->join('roles','roles.id_role','=','users.id_role')
                        ->join('kelas','kelas.id_kelas','=','users.id_kelas')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('username','like','%'.$this->search.'%')
                        ->orwhere('name_role','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.account.remove-account', [
            'users' => $this->search === null ? $users : $search
        ]);
    }
}
