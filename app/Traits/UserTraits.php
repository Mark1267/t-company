<?php
namespace App\Traits;

use App\Models\User;

trait UserTraits {

    public static function getCurrentAdminUser($user_id){
        return User::where('id', $user_id)->where('admin', 1)->first();
    }

    public function getReferral($username){
        $newRef = 0;
        $ref = User::where('username', $username)->first();
        if($ref){
            $newRef = $ref->id;
        }

        return $newRef;
    }
}