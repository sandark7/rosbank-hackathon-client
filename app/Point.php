<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    //
    protected $fillable = ['address', 'terminal_id', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTerminalIds()
    {
        return $this->terminal_id;
    }


}
