<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Carbon\Carbon;

use App\Comment;

class Comments extends Component
{
    public $comments = [];

    public $newComment;

    public function mount(){
        $initialComments = Comment::latest()->get();
        $this->comments = $initialComments;
    }

    public function updated($name, $value)
    {
        $this->validate(['newComment'=>'required|max:255']);
    }

    public function addComment(){

        $this->validate(['newComment'=>'required|max:255']);

        $createdComment = Comment::create(['body'=> $this->newComment,'user_id'=>1]);
        $this->comments->prepend($createdComment);
        $this->newComment="";

        session()->flash('message', 'Comment added successfully..!');
    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();
        $this->comments = $this->comments->except($commentId);
        // dd($comment);
        session()->flash('messagedel', 'Comment deleted successfully..!');
    }
        

    public function render()
    {
        return view('livewire.comments');
    }

}