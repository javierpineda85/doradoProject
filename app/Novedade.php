<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Novedade;

class Novedade extends Model
{
    protected $fillable = ['user_id','title', 'subtitle', 'body','img'];

    public $guarded=[];

  
}
