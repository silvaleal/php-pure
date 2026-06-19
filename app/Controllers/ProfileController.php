<?php

namespace App\Controllers;

use Flight;

class ProfileController
{

    public function index()
    {
        return Flight::render('profile/home');
    }

}