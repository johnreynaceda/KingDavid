<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;
use App\Models\Announcement as announcemodel; 


class Announcement extends Component
{
    use WithFileUploads;
    public $isEdit = false;
    public $photo;
    public $title;
    public $content;
    public $lastphoto;
    public $announceid;
    public function render()
    {
        return view('livewire.announcement',[
            'announce' => announcemodel::get(),
        ]);
    }

    public function save(){
        $filename = $this->photo->getClientOriginalName();
        $this->photo->storeAs('announcement',$filename,'public');
        $data = announcemodel::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

          Image::create([
          'url' => $filename,
          'imageable_id' => $data->id,
          'imageable_type' => 'App\Models\Announcement'
          ]);
          $this->title = "";
          $this->photo = "";
          $this->content = "";
          $this->alert('success', 'Added to announcement');
          
    }

    public function edit($id){
          $this->isEdit = true;
          $this->photo=null;
        $data = announcemodel::find($id);
        $this->title = $data->title;
        $this->content = $data->content;
        $this->announceid = $data->id;
          $this->lastphoto = $data->image->url;

    }
    public function editsave(){

    if ($this->photo == null) {
    $data = announcemodel::find($this->announceid);
    $data->update([
    'title' => $this->title,
    'content' => $this->content,
    ]);
    }else{

    $filename = $this->photo->getClientOriginalName();
    $this->photo->storeAs('announcement',$filename,'public');


    $data = announcemodel::find($this->announceid);
   
    $data->update([
    'title' => $this->title,
    'content' => $this->content,
    ]);
    Image::create([
    'url' => $filename,
    'imageable_id' => $this->announceid,
    'imageable_type' => 'App\Models\Announcement',
    ]);
    $imageUpdated = Image::where(['imageable_id' => $this->announceid, 'imageable_type' =>
    'App\Models\Announcement'])->update(['url' => $filename]);

    if($imageUpdated){
    \File::delete('storage/announcement/' .$this->lastphoto);
    }
    }
    $this->title = "";
    $this->photo = null;
    $this->lastphoto = null;
    $this->content = "";
    $this->alert('success', 'Announcement Updated.');
    }
     public function delete(){
     announcemodel::find($this->announceid)->delete();
     $this->alert('success', 'Announcement deleted.');
    $this->isEdit = false;
     $this->title = "";
     $this->photo = null;
     $this->lastphoto = null;
     $this->content = "";
         $data = Image::where('id',$this->announceid)->where('imageable_type', 'App\Models\Announcement')->first();
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
