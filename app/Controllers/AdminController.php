<?php

namespace App\Controllers;

use App\Services\Service;
use App\Services\UsersServices;
use Flight;

class AdminController {

    public function index() {

        return Flight::render("admin");
    }
}