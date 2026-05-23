<?php

namespace App\Controllers;

use Flight;

class HomeController
{
    public function index()
    {
        return Flight::render("home");
    }
}