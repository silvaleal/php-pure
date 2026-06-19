<?php

namespace App\Middlewares;

use Flight;
use PureSession\Session;

class AuthMiddleware {
    public function before($params) {
        $user = (new Session())->get('auth');
        if (!$user) {
            Flight::redirect("/login");
        }
    }

}