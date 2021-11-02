<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class Side extends Component
{
    public function render()
    {
        return view('livewire.side',[
            'announce' => Announcement::get(),
        ]);
    }
}
