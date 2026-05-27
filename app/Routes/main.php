<?php

use App\Controllers\AdminController;
use App\Controllers\AdminUsersController;
use App\Controllers\HomeController;

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('GET /admin', [AdminController::class, 'index']);
Flight::route('GET /admin/users', [AdminUsersController::class, 'index']);



Flight::route('GET /admin/subscriptions', [AdminController::class, 'index']);
Flight::route('GET /admin/settings', [AdminController::class, 'index']);
