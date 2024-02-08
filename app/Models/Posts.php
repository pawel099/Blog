<?php

namespace App\Models;
 
use App\Models\Comments;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
 
 class Posts extends Model implements HasMedia { 
  
  use HasFactory;
  use InteractsWithMedia;
  
  protected $cats = [
  'is_published'=>'boolean',
  ];

  protected $fillable = [

  'id','tytul','tresc','category_id','is_published','image_path',
  
 
 ];

 public function tags():BelongsToMany {

  return $this->belongsToMany(Tag::class,'posts_id','tags_id');
    
  }


  public function category()   {

  return $this->belongsTo(Category::class);
  
  }

  
  
    public function comments() {
    return $this->hasMany(Comments::class,'comments_id');

   }
}
