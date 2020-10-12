<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['profile_kid_id','street','street_number','street_house','locality','city']; 
    
    
    public function location(){
        return $this->hasOneThrough(Location::class, Profile_kid::class);
    }

}
