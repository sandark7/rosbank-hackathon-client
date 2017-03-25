<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;

class CabinetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function stat()
    {
        return view('stat');
    }

    public function report()
    {
        $points = Point::where('user_id', 1)
            ->orderBy('id', 'desc')
            ->take(100)
            ->get();

        return view('report', ['points' => $points]);
    }
}
