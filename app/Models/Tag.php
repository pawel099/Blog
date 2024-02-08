<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts; 
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name' ,
        'tags_id',
        'posts_id',
  ];


        public function post():BelongsToMany {

            return $this->belongsToMany(Posts::class,'tags_id','posts_id');
       
    }

}
