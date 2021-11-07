<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;
class ViewNews extends Component
{
 public $newsid;
    public function mount($id){
        $this->newsid = $id;
       }
    public function render()
    {
        return view('livewire.view-news',[
            'news' => News::where('id', $this->newsid)->first(),
        ]);
    }
}
