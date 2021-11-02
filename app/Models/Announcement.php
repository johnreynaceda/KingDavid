<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
     protected $guarded = [];

     public function image(){
     return $this->morphOne(Image::class,'imageable');
     }
}
