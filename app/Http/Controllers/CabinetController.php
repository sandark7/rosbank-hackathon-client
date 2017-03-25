<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('report');
    }
}
