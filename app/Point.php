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


    public function getOffersNum()
    {
        $num = 12 * $this->id + (2 * $this->id);
        return $num;
    }

    public function getOffersMoney()
    {
        $num = 120 * $this->id + 10 * $this->id;
        return $num;
    }

    public static function getBigData()
    {
        $bigdata = [

            'average_check' => [
                'my' => rand(451, 501),
                'others' => rand(652, 702)
            ],
            'transactions' => [
                'my' => rand(100, 149) / 100,
                'others' => rand(151, 200) / 100
            ],
            'spending' => [
                'my' => rand(351, 451) ,
                'others' => rand(971, 1001)
            ],

            'potential' => rand(201, 230),
            'sleep' => rand(142, 182),
            'first' => rand(349, 451),

        ];

        return $bigdata;
    }
}
