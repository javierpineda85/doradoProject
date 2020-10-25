<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_parent extends Model
{

    protected $fillable=['user_id','profile_kid_id','dni','numberPhone','phone2','baja']; 

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function profile_kid(){
        return $this->hasOne(Profile_kid::class);
    }
}
