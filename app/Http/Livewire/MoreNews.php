<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class MoreNews extends Component
{
    public function render()
    {
        return view('livewire.more-news',[
            'news' => News::get(),
        ]);
    }
}
