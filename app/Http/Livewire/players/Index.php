<?php

namespace App\Http\Livewire\players;

use Livewire\Component;
use App\Models\Player;

class Index extends Component
{
    public function loadPlayer(){
        $players = Player::orderBy('name')->get();

        return compact('players');
    }
    public function render()
    {
        return view('livewire.players.index', $this->loadPlayer());
    }
}
