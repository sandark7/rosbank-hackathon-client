<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use Illuminate\Support\Facades\Validator;

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
}