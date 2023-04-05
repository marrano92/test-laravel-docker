<?php

namespace App;

use Illuminate\Http\Request;

class ValidatorUser {

   private static array $users_active = [
     'user_1'
   ];

    /**
     * Validate User
     * @param $user
     *
     * @return bool
     */
    public static function validate($user):bool{
        return in_array( $user, self::$users_active);
    }
}
