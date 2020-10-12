<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable=['profile_kid_id','school_name','school_level','school_turn',
                        'schedule','street','street_number','locality','city',
                        'phone','contact_name','contact_phone'];
    
    
    public function School(){
        return $this->hasManyThrough(School::class, Profile_kid::class);
    }
}
