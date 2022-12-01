<?php

namespace App\Http\Livewire\Admin\History;

use Livewire\Component;
use Livewire\WithPagination;

class HistoryTable extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function destroy($id)
    {
        $delete = \DB::table('history')
                        ->where('id_history', $id)
                        ->delete();

        session()->flash('success', 'Berhasil menghapus data history!');
    }

    public function destroyAll()
    {
        $delete = \DB::table('history')
                        ->delete();

        session()->flash('success', 'Berhasil menghapus semua data history!');
    }

    public function render()
    {
        $data_count = \DB::table('history')->count();

        $histories = \DB::table('history')
                            ->join('users','history.id_user','=','users.id')
                            ->orderByDesc('id_history')
                            ->paginate($this->paginate);

        $search = \DB::table('history')
                        ->join('users','history.id_user','=','users.id')
                        ->where('name','like','%'.$this->search.'%')
                        ->orwhere('activity_history','like','%'.$this->search.'%')
                        ->orderByDesc('id_history')
                        ->paginate($this->paginate);

        return view('livewire.admin.history.history-table', [
            'histories' => $this->search === null ? $histories : $search,
            'data_count' => $data_count]);
    }
}
