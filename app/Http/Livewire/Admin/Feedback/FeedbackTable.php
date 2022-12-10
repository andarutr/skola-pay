<?php

namespace App\Http\Livewire\Admin\Feedback;

use Livewire\Component;
use App\Models\Feedback;
use Livewire\WithPagination;

class FeedbackTable extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $paginate = 5;

    public function destroy($id)
    {
       Feedback::where('id_feedback',$id)
                ->delete();

        session()->flash('success','Berhasil menghapus data!');
    }

    public function destroyAll()
    {
        \DB::table('feedback')->delete();

        session()->flash('success','Berhasil menghapus semua data!');
    }

    public function render()
    {
        $feed_count = Feedback::count();
        
        $feedbacks = Feedback::orderByDesc('id_feedback')
                                ->paginate($this->paginate);

        $search = Feedback::orderByDesc('id_feedback')
                            ->where('name_feedback','like','%'.$this->search.'%')
                            ->orwhere('email_feedback','like','%'.$this->search.'%')
                            ->paginate($this->paginate);


        return view('livewire.admin.feedback.feedback-table', [
            'feed_count' => $feed_count,
            'feedbacks' => $this->search === null ? $feedbacks : $search
        ]);
    }
}
