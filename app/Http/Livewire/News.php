<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;
use App\Models\News as newsmodel; 


class News extends Component
{
    use WithFileUploads;
    public $isEdit = false;
    public $photo;
    public $title;
    public $content;
    public $lastphoto;
    public $newsid;
    public function render()
    {
        return view('livewire.news',[
            'news' => newsmodel::get(),
        ]);
    }

    public function save(){
        $filename = $this->photo->getClientOriginalName();
        $this->photo->storeAs('announcement',$filename,'public');
        $data = newsmodel::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

          Image::create([
          'url' => $filename,
          'imageable_id' => $data->id,
          'imageable_type' => 'App\Models\News'
          ]);
          $this->title = "";
          $this->photo = "";
          $this->content = "";
          $this->alert('success', 'Added to news');
          
    }

    public function edit($id){
          $this->isEdit = true;
          $this->photo=null;
        $data = newsmodel::find($id);
        $this->title = $data->title;
        $this->content = $data->content;
        $this->newsid = $data->id;
          $this->lastphoto = $data->image->url;

    }
    public function editsave(){

    if ($this->photo == null) {
    $data = newsmodel::find($this->newsid);
    $data->update([
    'title' => $this->title,
    'content' => $this->content,
    ]);
    }else{

    $filename = $this->photo->getClientOriginalName();
    $this->photo->storeAs('announcement',$filename,'public');


    $data = newsmodel::find($this->newsid);
   
    $data->update([
    'title' => $this->title,
    'content' => $this->content,
    ]);
    Image::create([
    'url' => $filename,
    'imageable_id' => $this->newsid,
    'imageable_type' => 'App\Models\News',
    ]);
    $imageUpdated = Image::where(['imageable_id' => $this->newsid, 'imageable_type' =>
    'App\Models\News'])->update(['url' => $filename]);

    if($imageUpdated){
    \File::delete('storage/announcement/' .$this->lastphoto);
    }
    }
    $this->title = "";
    $this->photo = null;
    $this->lastphoto = null;
    $this->content = "";
    $this->alert('success', 'News Updated.');
    }
     public function delete(){
     newsmodel::find($this->newsid)->delete();
     $this->alert('success', 'News deleted.');
    $this->isEdit = false;
     $this->title = "";
     $this->photo = null;
     $this->lastphoto = null;
     $this->content = "";
      $data = Image::where('id',$this->newsid)->where('imageable_type', 'App\Models\News')->first();
      $data->delete();
     }
     public function cancel(){
     $this->isEdit = false;
     $this->title = "";
     $this->photo = null;
     $this->lastphoto = null;
     $this->content = "";
     }
}
