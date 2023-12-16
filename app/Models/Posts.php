<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Comments;
use App\Models\RelationManager;


class Posts extends Model implements HasMedia {  
  use HasFactory;
  // use RelationManager;
  use InteractsWithMedia;

  protected $cats = [

    'is_published'=>'boolean',
  ];

protected $fillable = [

'id',
 'tytul',
'tresc',
'slug',
'category_id',
'is_published',
 
 'image_path',
 

];


public function category()   {

  return $this->belongsTo(Category::class);
  
  }

  public function tags()   {

    return $this->belongsTo(Tag::class);
    
    }
  



 
public function comments() {

return $this->hasMany(Comments::class,'comments_id');

}


}
