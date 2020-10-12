<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_prof extends Model
{
  protected $fillable=['user_id','file','dni','cuil','birthday',
                      'street','street_number','street_house','phone',
                      'specialty','matricula','venc_matricula',
                      'rnp','venc_rnp','baja']; 
  
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
