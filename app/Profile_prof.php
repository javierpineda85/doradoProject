<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_prof extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
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
