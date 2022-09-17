<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Player;

class Delete extends Component
{
    public $playId;

    public function getPlayerProperty(){
        return Player::select('id','name', 'address', 'contact')
        ->find($this->playId);

    }
    public function deletePlayer(){
        $this->player->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.players.delete');
    }
}
