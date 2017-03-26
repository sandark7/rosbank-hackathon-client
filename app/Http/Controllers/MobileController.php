<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class MobileController extends Controller
{

    /**
     * API
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTokenAction($token_id)
    {

        Token::firstOrCreate([
            'token_id' => $token_id,
        ]);

        return response()->json(['success']);
    }

    public static function sendPush($offer)
    {
        $client = new \GuzzleHttp\Client();

        $tokens = Token::all()->toArray();

        $res_code = 200;

        foreach ($tokens as $token) {

            $response = $client->request('POST', 'https://gcm-http.googleapis.com/gcm/send', [

                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'key=AIzaSyB0Twe2S6Q4Y50twxJ6z5kzYsaRhsme3Ek'
                ],

                'connect_timeout' => 3,

                'json' => [
                    'data' => [
                        'offerId' => $offer->id,
                        'title' => $offer->name,
                        'message' => $offer->description
                    ],
                    'to' => $token['token_id']
                ],

            ]);

            $res_code = $response->getStatusCode() ;

            Log::info('Send to token: ', ['response' => $res_code, 'token_id' => $token['token_id'],

                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'key=AIzaSyB0Twe2S6Q4Y50twxJ6z5kzYsaRhsme3Ek'
                ],

                'connect_timeout' => 3,

                'json' => [
                    'data' => [
                        'offerId' => $offer->id,
                        'title' => $offer->name,
                        'message' => $offer->description
                    ],
                    'to' => $token['token_id']
                ],

            ]);

        }

        return $res_code;
    }
}