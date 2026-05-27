<?php

namespace App\Controllers;

use Flight;

class AdminUsersController {
    public function index() {
        return Flight::render("users");
    }
}