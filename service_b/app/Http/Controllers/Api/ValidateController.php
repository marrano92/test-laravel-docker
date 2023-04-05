<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InputsValidate;
use App\ValidatorUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ValidateController extends Controller {

    /**
     * Store a new user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function validateInput( Request $request ): Response {
        $user = $request->all()['input'] ?? '';

        if ( ValidatorUser::validate( $user ) ) {
            $validation       = new InputsValidate();
            $validation->user = $user;
            $validation->save();

            return response( "$user: User valid!", 200 );
        } else {
            return response( "$user: User not valid!", 400 );
        }
    }
}
