<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ValidatorUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ValidateController extends Controller {

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function validateInput(Request $request): Response {
        $user = $request->all()['input'] ?? '';

        return ValidatorUser::validate($user) ? response("$user: User valid!", 200) : response( "$user: User not valid!", 400 );
    }
}
