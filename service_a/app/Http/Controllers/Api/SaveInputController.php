<?php

namespace App\Http\Controllers\Api;

use App\Api\ServiceBApi;
use App\Http\Controllers\Controller;
use App\Proxy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaveInputController extends Controller {

    public function startValidation(): Response|JsonResponse {
        $inputs = [
            'user_1',
            'user_2',
        ];

        $api   = new ServiceBApi();
        $proxy = new Proxy( $api );

        $validations = $proxy->validateInputs( $inputs );

        return response()->json( $validations );
    }
}
