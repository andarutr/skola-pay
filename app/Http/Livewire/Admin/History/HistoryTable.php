<?php

namespace App\Http\Livewire\Admin\History;

use App\Models\History;
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
        $delete = History::where('id_history', $id)
                        ->delete();

        session()->flash('success', 'Berhasil menghapus data history!');
    }

    public function destroyAll()
    {
        \DB::table('history')
            ->delete();

        session()->flash('success', 'Berhasil menghapus semua data history!');
    }

    public function render()
    {
        $data_count = History::count();

        $histories = History::orderByDesc('id_history')
                                ->join('users','users.id','=','history.id_user')
                                ->paginate($this->paginate);

        $search = History::orderByDesc('id_history')
                            ->join('users','users.id','=','history.id_user')
                            ->where('name','like','%'.$this->search.'%')
                            ->orwhere('activity_history','like','%'.$this->search.'%')
                            ->paginate($this->paginate);

        return view('livewire.admin.history.history-table', [
            'histories' => $this->search === null ? $histories : $search,
            'data_count' => $data_count]);
    }
}
