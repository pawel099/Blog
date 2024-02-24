<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Comments extends Model
{
  use HasFactory;
  protected $fillable = [
   'id',
   'comments_id',
   'nick',
   'email',
   'contents',
   'status'

  ];



public function post()

{
return $this->belongsTo(Posts::class,'id');
}

}


