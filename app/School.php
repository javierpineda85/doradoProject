<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function School(){
        return $this->hasManyThrough(School::class, Profile_kid::class);
    }
}
