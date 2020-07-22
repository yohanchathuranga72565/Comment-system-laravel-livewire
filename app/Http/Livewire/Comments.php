<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body'=> 'Lorunm text. hi I am yohan this is a wrong thing. now I am going to learn larave livewire..good luck. keep it up',
            'created_at'=> '3 min ago',
            'creator'=> 'Sarthak'
        ]
    ];

    public $newComment;

    public function addComment(){

        if($this->newComment ==''){
            return;
        }

        array_unshift($this->comments,[
            'body'=> $this->newComment,
            'created_at'=> Carbon::now()->diffForHumans(),
            'creator'=> 'Sarthak'
        ]);
        $this->newComment="";
    }
        

    public function render()
    {
        return view('livewire.comments');
    }

}