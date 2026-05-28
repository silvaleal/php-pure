<?php

use App\Controllers\HomeController;

Flight::route('GET /', [HomeController::class, 'index']);