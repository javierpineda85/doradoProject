<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_kid extends Model
{

    public function profile_kid(){
        return $this->belongsTo(Profile_parent::class);
    }

    public function location(){
        return $this->hasOne(Location::class);
    }

    public function school(){
        return $this->hasOne(School::class);
    }
    //Query Scope

    public function scopeName($query, $name){
        if($name)
          return $query->where('name', 'LIKE', "%$name%");
  
      }
  
      public function scopeEmail($query, $email){
        if($email)
          return $query->where('email', 'LIKE', "%$email%");
  
      }
  
      public function scopeLastName($query, $lastName){
        if($lastName)
          return $query->where('lastName', 'LIKE', "%$lastName%");
  
      }
}
