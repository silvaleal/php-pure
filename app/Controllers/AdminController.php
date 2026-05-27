<?php

namespace App\Controllers;

use Flight;

class AdminController {
    public function index() {
        return Flight::render("admin");
    }
}