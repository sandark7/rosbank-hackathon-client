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
            'Параметр 1' => rand(10, 200),
            'Параметр 2' => rand(10, 200),
            'Параметр 3' => rand(10, 200),
            'Параметр 4' => rand(100, 2000),
            'Параметр 5' => rand(100, 2000),
            'Параметр 6' => rand(100, 2000),
        ];

        return response()->json($bigdata);
    }
}