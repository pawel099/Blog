<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Comments;
 


class Posts extends Model implements HasMedia {  
  use HasFactory;
  use InteractsWithMedia;

protected $fillable = [
'id',
'nick',
'email',
'naglowek',
'tytul',
 'image_path',
'tresc'

];


 
public function comments()   {

return $this->hasMany(Comments::class,'comments_id');

}


}
