<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'phone',
        'company_name',
        'company_type',
        'company_scope',
        'text',
        'region',
        'office',
        'accept'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    /*
    public function points()
    {
        return $this->hasMany(Point::class);
    }
    */
}
