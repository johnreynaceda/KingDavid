<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class MoreAnnouncement extends Component
{
    public function render()
    {
        return view('livewire.more-announcement',[
            'announce' => Announcement::get(),
        ]);
    }
}
