<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    /**
     * API
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer = Offer::all()->toArray();

        return response()->json($offer);
    }

    /**
     * API
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexByClient()
    {
        $offer = Offer::all()->toArray();

        return response()->json($offer);
    }

    /**
     * API
     */
    public function pushToClient()
    {

        $offer = Offer::where('is_push', 1)
            ->take(1)
            ->get()->toArray();

        return response()->json($offer);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::where('id', $id)
        ->orderBy('name', 'desc')
        ->take(1)
        ->get();

        return response()->json($offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Cabinet list offers
     */
    public function listAction()
    {
        //$offers = Offer::all();

        $offers = Offer::where('user_id', 1)
            ->orderBy('id', 'desc')
            ->take(100)
            ->get();

        return view('offer_list', ['offers' => $offers] );
    }

    /**
     * Cabinet add offer
     */
    public function addAction()
    {
        return view('offer_add');
    }


}
