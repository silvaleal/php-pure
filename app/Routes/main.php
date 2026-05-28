<?php

use App\Controllers\AdminController;
use App\Controllers\AdminPlansController;
use App\Controllers\AdminSettingsController;
use App\Controllers\AdminUsersController;
use App\Controllers\HomeController;
use App\Models\Plans;
use App\Models\Users;
use App\Services\PlansServices;
use App\Services\UsersServices;

Flight::route('GET /', [HomeController::class, 'index']);