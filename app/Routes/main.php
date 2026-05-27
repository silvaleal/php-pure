<?php

use App\Controllers\AdminController;
use App\Controllers\AdminPlansController;
use App\Controllers\AdminUsersController;
use App\Controllers\HomeController;
use App\Models\Plans;
use App\Services\PlansServices;

$plansServices = new PlansServices(new Plans());
$plansController = new AdminPlansController($plansServices);

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('GET /admin', [AdminController::class, 'index']);
Flight::route('GET /admin/plans', [$plansController, 'index']);
Flight::route('GET /admin/plan/@uuid', [$plansController, 'edit']);
Flight::route('PATCH /admin/plan/@uuid', [$plansController, 'update']);
Flight::route('GET /admin/plans/create', [$plansController, 'create']); 
Flight::route('POST /admin/plans/create', [$plansController, 'store']);
Flight::route('DELETE /admin/plan/@uuid', [$plansController, 'delete']);
