<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use Illuminate\Support\Facades\Validator;

class AIController extends Controller
{


    /**
     * API
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexByPoint($point_id)
    {

        Point::where('id', $point_id)
            ->update(['analytic_date' => date('Y-m-d H:i:s')]);

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

        return response()->json($bigdata);
    }
}