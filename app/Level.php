<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }

    public function histories(){
        return $this->hasManyThrough(History::class, User::class);
    }

    public function chats(){
        return $this->hasManyThrough(Chat::class, User::class);
    }
}
