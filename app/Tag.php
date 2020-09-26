<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function histories(){
        return $this-> morphedByMany(History::class, 'taggable');
    }

    public function chats(){
        return $this-> morphedByMany(Chat::class, 'taggable');
    }
}
