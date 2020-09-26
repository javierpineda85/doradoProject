<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function histories(){
        return $this->hasMany(History::class);
    }

    public function chats(){
        return $this->hasMany(Chat::class);
    }
}
