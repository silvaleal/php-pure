<?php

namespace App\Controllers;

use Flight;

class AdminSettingsController
{
    public static function index()
    {
        return Flight::render('settings');
    }
}
