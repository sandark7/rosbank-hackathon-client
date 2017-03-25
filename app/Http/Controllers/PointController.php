<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use App\Offer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class PointController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Cabinet list
     */
    public function listAction()
    {
        $points = Point::where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->take(100)
            ->get();

        return view('point_list', ['points' => $points] );
    }

    /**
     * Cabinet add
     */
    public function addAction()
    {
        return view('point_add');
    }

    /**
     * Cabinet add
     */
    public function makeAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $point = new Point();
        $point->address = $request->address;
        $point->user_id = Auth::id();
        $point->terminal_id = implode($request->terminal_id, ', ');
        $point->save();

        return redirect()->route('point_list');
    }

    public function detailAction($id)
    {
        $point = Point::where('id', $id)->first();
        $steps = [
            'step_1' => rand(101,199),
            'step_2' => rand(21, 39)
        ];

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

        return view('point_detail', [
            'point' => $point,
            'steps' => $steps,
            'company_name' => Offer::getDefaultName(),
            'company_logo' => Offer::getDefaultLogo(),
            'bigdata' => $bigdata,
        ]);
    }
}
