<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\SupportTicket;

class Tickets extends Component
{
    public $active;
    protected $listeners = [
        'ticketSelected',
    ];

    public function ticketSelected($ticketId){
        $this->active = $ticketId;
    }

    public function render()
    {
        return view('livewire.tickets',[
            'tickets'=> SupportTicket::all(),
        ]);
    }
}
