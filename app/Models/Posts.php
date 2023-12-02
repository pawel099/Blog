<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Posts extends Model
{
  use HasFactory;

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
