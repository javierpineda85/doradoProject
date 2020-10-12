<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Novedade;

class Novedade extends Model
{
    protected $fillable = ['user_id','title', 'subtitle', 'body','file'];

    public $guarded=[];

    public function scopeTitle($query, $title){
        if($title)
          return $query->where('title', 'LIKE', "%$title%");
  
      }
}
