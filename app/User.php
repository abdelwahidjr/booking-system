<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,SoftDeletes,Notifiable;

    protected $fillable = ['name','email','password',];

    protected $hidden = ['password','remember_token',];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
