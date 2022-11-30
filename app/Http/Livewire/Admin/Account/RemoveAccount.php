<?php

namespace App\Http\Livewire\Admin\Account;

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
        $delete = \DB::table('users')
                        ->where('id',$id)
                        ->delete();
                        
        session()->flash('success', 'Berhasil menghapus data!');
    }

    public function render()
    {
        $users = \DB::table('users')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->orderByDesc('id')
                        ->paginate($this->paginate);

        $search = \DB::table('users')
                        ->join('roles','users.id_role','=','roles.id_role')
                        ->join('kelas','users.id_kelas','=','kelas.id_kelas')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('username','like','%'.$this->search.'%')
                        ->orwhere('name_role','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.admin.account.remove-account', [
            'users' => $this->search === null ? $users : $search
        ]);
    }
}
