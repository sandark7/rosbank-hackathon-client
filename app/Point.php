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

            'Средний чек' => [
                'my' => rand(451, 501),
                'others' => rand(652, 702)
            ],
            'Транзаций в месяц' => [
                'my' => rand(100, 149) / 100,
                'others' => rand(151, 200) / 100
            ],
            'Траты в месяц' => [
                'my' => rand(351, 451) ,
                'others' => rand(971, 1001)
            ],

            'Потенциальные' => rand(3010, 3801),
            'Уснувшие' => rand(1042, 1802),
            'Разовые' => rand(2349, 2931),

        ];

        return $bigdata;
    }

    public function getRecipientNum($target_id)
    {
        $bigdata = json_decode($this->bigdata, true);

        if ($target_id == 1) {
            return $bigdata['potential'];
        }

        if ($target_id == 2) {
            return $bigdata['sleep'];
        }

        if ($target_id == 3) {
            return $bigdata['first'];
        }
    }
}
