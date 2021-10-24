<?php

namespace App\Http\Livewire\Groups;

use Livewire\Component;

class CheckIn extends Component
{
    public $group;

    public function render()
    {
        return view('livewire.groups.check-in');
    }
}
