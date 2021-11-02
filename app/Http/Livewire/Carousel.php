<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Carousel as carouselmodel;
use App\Models\Image;
use Livewire\WithPagination;

class Carousel extends Component
{
       use WithFileUploads;
       use WithPagination;
       public $isEdit = false;
        public $photo;
        public $lastphoto;
        public $type = 'Announcement';
        public $title;
        public $carouselid;

    public function render()
    {
        return view('livewire.carousel',[
            'carousels' => carouselmodel::get(),
        ]);
    }

    public function save(){
         $filename = $this->photo->getClientOriginalName();
         $this->photo->storeAs('carousel',$filename,'public');

        $data = carouselmodel::create([
            'title' => $this->title,
            'type' => $this->type,
        ]);

          Image::create([
          'url' => $filename,
          'imageable_id' => $data->id,
          'imageable_type' => carouselmodel::class,
          ]);
        $this->title = "";
        $this->photo = "";
        $this->type = null;
        $this->alert('success', 'Added to carousel');
    }

    public function edit($id){
        $this->isEdit = true;
        $this->photo=null;
        $data = carouselmodel::find($id);
        $this->title = $data->title;
        $this->type = $data->type;
        $this->carouselid = $data->id;
        $this->lastphoto = $data->image->url;

    }
    public function delete(){
       carouselmodel::find($this->carouselid)->delete();
       $this->alert('success', 'Carousel deleted.');  
        $this->isEdit=false;
         $this->title = "";
         $this->photo = null;
         $this->lastphoto = null;
         $this->type = null;

        $data = Image::where('id',$this->carouselid)->where('imageable_type', 'App\Models\Carousel')->first();
       $data->delete();
    }
    public function editsave(){

         if ($this->photo == null) {
            $data = carouselmodel::find($this->carouselid);
            $data->update([
            'title' => $this->title,
            'type' => $this->type,
            ]);
         }else{
         $filename = $this->photo->getClientOriginalName();
         $this->photo->storeAs('carousel',$filename,'public');


         $data = carouselmodel::find($this->carouselid);
         $data->update([
         'title' => $this->title,
         'type' => $this->type,
         ]);
         Image::create([
         'url' => $filename,
         'imageable_id' => $this->carouselid,
         'imageable_type' => carouselmodel::class,
         ]);
         $imageUpdated = Image::where(['imageable_id' => $this->carouselid, 'imageable_type' =>
         carouselmodel::class])->update(['url' => $filename]);

         if($imageUpdated){
         \File::delete('storage/carousel/' .$this->lastphoto);
         }
         }
         $this->title = "";
         $this->photo = null;
         $this->lastphoto = null;
         $this->type = null;
         $this->alert('success', 'Carousel Updated.');
    }

    public function cancel(){
        $this->isEdit = false;
         $this->title = "";
         $this->photo = null;
         $this->lastphoto = null;
         $this->type = null;
    }
}
