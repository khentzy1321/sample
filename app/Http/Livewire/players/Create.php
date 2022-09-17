<?php

namespace App\Http\Livewire\players;

use Livewire\Component;
use App\Models\Player;


class Create extends Component
{
    public $name, $address, $contact, $age, $team;

    public function addPlayer(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'address'           =>            ['required' ,'string', 'max:255'],
            'contact'           =>            ['required' ,'string', 'max:255'],
            'age'    =>            ['required' ,'string', 'max:255'],
            'team'                =>           ['required' ,'string', 'max:255'],
        ]);

        Player::create([
            'name'                =>        $this->name,
            'address'             =>        $this->address,
            'contact'             =>        $this->contact,
            'age'      =>        $this->age,
            'team'                  =>        $this->team,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!!');
    }

    public function render()
    {
        return view('livewire.players.create');
    }
}
