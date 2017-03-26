<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Point;
use App\Token;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
     * API for mobile monitoring
     */
    public function pushToClient($client_id)
    {

        if ($client_id != 123) {
            return response()->json([]);
        }

        $offer = Offer::where('is_push', 1)
            ->take(1)
            ->get()->toArray();

        return response()->json($offer);
    }

    /**
     * API for web
     */
    public function sendOffer($offer_id)
    {
        Offer::where('id', $offer_id)
            ->update(['is_push' => 1]);

        return response()->json(['result' => 'success']);
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

        $offers = Offer::where('user_id', Auth::id() )
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
        return view('offer_add' );

        //return response()->json(['success', ['point_id' => $point_id, 'target_id' => $target_id] ]);
    }

    /**
     * Cabinet add offer
     */
    public function addTargetAction($point_id, $target_id)
    {
        $point =  Point::where('id', $point_id)->first();

        return view('offer_add', ['point' => $point, 'target_id' => $target_id] );

    }

    /**
     * Cabinet add offer
     */
    public function makeAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $offer = new Offer();
        $offer->name = $request->name;
        $offer->user_id = Auth::id();
        $offer->logo = Offer::getDefaultLogo();
        $offer->description = $request->description;
        $offer->cashback = $request->cashback;
        $offer->is_push = 1;
        $offer->company_name = Offer::getDefaultName();

        $offer->point_id = $request->point_id;
        $offer->point_address = $request->point_address;
        $offer->date_from = date('Y-m-d', strtotime($request->date_from));
        $offer->date_to = date('Y-m-d', strtotime($request->date_to));
        $offer->recipient_num = $request->recipient_num;

        $offer->save();

        $response_code = \App\Http\Controllers\MobileController::sendPush($offer);

        if ( $response_code == 200) {

            $request->session()->flash('alert-success', 'Предложение создано и отправлено получателям!');

        } else {

            $request->session()->flash('alert-success', 'Предложение создано. Ошибка отправки push');

        }

        return redirect()->route('offer_list');
    }


}
