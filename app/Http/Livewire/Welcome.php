<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carousel;
use App\Models\Announcement;
use App\Models\News;
use livewire\WithPagination;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome',[
            'carousels' => Carousel::get(),
            'announce' => Announcement::paginate(6),
            'news' => News::paginate(6),
        ]);
    }
}
