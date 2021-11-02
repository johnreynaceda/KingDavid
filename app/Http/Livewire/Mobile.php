<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carousel;
use App\Models\Announcement;
use App\Models\News;

class Mobile extends Component
{
    public function render()
    {
        return view('livewire.mobile',[
        'carousels' => Carousel::get(),
         'announce' => Announcement::get(),
         'news' => News::get(),
        ]);
    }
}       
