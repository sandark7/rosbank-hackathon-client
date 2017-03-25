<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use Illuminate\Support\Facades\Validator;

class PointController extends Controller
{

    /**
     * Cabinet list
     */
    public function listAction()
    {
        $points = Point::where('user_id', 1)
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
        $point->user_id = 1;
        $point->terminal_id = implode($request->terminal_id, ', ');
        $point->save();

        return redirect()->route('point_list');
    }

}
