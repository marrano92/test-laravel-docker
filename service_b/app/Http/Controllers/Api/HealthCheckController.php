<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class HealthCheckController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    }

    public function health(): \Illuminate\Http\JsonResponse {
        return response()->json( [ 'status' => 'ok' ], 200 );
    }

    public function info(): \Illuminate\Http\JsonResponse {
        $info['ms-name'] = env( 'APP_NAME', 'Anonymous' );;
        $info['memory_usage'] = memory_get_usage( true );
        $info['cpu_usage']    = sys_getloadavg()[0];

        return response()->json( $info, 200 );
    }
}
