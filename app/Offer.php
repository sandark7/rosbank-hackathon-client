<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Offer extends Model
{
    //
    protected $fillable = ['name'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getDefaultLogo()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return $user->company_logo;
        }

        return 'http://rsb-linuxvm-04.northeurope.cloudapp.azure.com/images/logo.png';
    }

    public static function getDefaultName()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return $user->company_name;
        }

        return 'Смузишная №1';
    }
}
