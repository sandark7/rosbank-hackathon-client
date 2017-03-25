<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = ['name'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDefaultLogo()
    {
        return 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/logo.png';
    }

    public static function getDefaultName()
    {
        return 'Смузишная №1';
    }
}
