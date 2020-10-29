<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable=['FromUser_id','ToUser_id','title','body','reed'];


    public function user(){
        return $this->belongsToMany(User::class)->withTimestamps;
    }
    /*public function category(){
        return $this->belongsTo(Category::class);
    } */

    public function comments(){
        return $this-> morphMany(Comment::class, 'commentable');
    }

    public function image(){
        return $this-> morphOne(Image::class, 'imageable');
    }

    public function tags(){
        return $this-> morphToMany(Tag::class, 'taggable');
    }
}
