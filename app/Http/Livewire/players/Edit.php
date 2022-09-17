<?php

namespace App\Http\Livewire\Players;

use Livewire\Component;
use App\Models\Player;
class Edit extends Component
{
    public $playId;
    public $name, $address, $contact, $age, $team;

    public function mount(){
        $this->name = $this->player->name;
        $this->address = $this->player->address;
        $this->contact = $this->player->contact;
        $this->age = $this->player->age;
        $this->team = $this->player->team;

    }

    public function editPlayer(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'address'           =>            ['required' ,'string', 'max:255'],
            'contact'           =>            ['required' ,'string', 'max:255'],
            'age'            =>            ['required' ,'string', 'max:255'],
            'team'                =>            ['required' ,'string', 'max:255'],
        ]);
        $this->player->update([
            'name'        =>        $this->name,
            'address'        =>        $this->address,
            'contact'        =>        $this->contact,
            'age'        =>        $this->age,
            'team'        =>        $this->team,
        ]);
        return redirect('/index')->with('message' , 'Updated SucessFully');
    }


    public function getPlayerProperty(){
        return Player::find($this->playId);
    }


    public function render()
    {
        return view('livewire.players.edit');
    }
}
