<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class ViewAnnouncement extends Component
{
 public $announceid;

    public function mount($id){
        $this->announceid = $id;
    }

    public function render()
    {
        return view('livewire.view-announcement',[
            'announce' => Announcement::where('id', $this->announceid)->first(),
        ]);
    }
}
