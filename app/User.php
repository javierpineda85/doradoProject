<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*public function profile(){
        return $this->hasOne(Profile::class);
    } */
    public function profile_parent(){
        return $this->hasOne(Profile_parent::class);
    }
    
    public function profile_kid(){
        return $this->hasOneThrough(Profile_kid::class, Profile_parent::class);
    }

    public function profile_prof(){
        return $this->hasOne(Profile_prof::class);
    }


    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function groups(){
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public function location(){
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    public function histories(){
        return $this->hasMany(History::class);
    }

    public function chats(){
        return $this->hasMany(Chat::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
