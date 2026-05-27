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

$plansServices = new PlansServices(new Plans());
$plansController = new AdminPlansController($plansServices);
$usersServices = new UsersServices(new Users());
$usersController = new AdminUsersController($usersServices);

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('GET /admin', [AdminController::class, 'index']);
Flight::route('GET /admin/settings', [AdminSettingsController::class, 'index']);
Flight::route('GET /logout', function () {
    session_destroy();
    return Flight::redirect('/');
});

Flight::route('GET /admin/users', [$usersController, 'index']);
Flight::route('GET /admin/users/create', [$usersController, 'create']);
Flight::route('POST /admin/users/create', [$usersController, 'store']);
Flight::route('GET /admin/user/@uuid', [$usersController, 'edit']);
Flight::route('PATCH /admin/user/@uuid', [$usersController, 'update']);
Flight::route('DELETE /admin/user/@uuid', [$usersController, 'delete']);
Flight::route('POST /admin/user/@uuid', function ($uuid) use ($usersController) {
    $data = Flight::request()->data->getData();
    $method = strtoupper($data['_method'] ?? '');

    if ($method === 'PATCH') {
        return $usersController->update($uuid);
    }

    if ($method === 'DELETE') {
        return $usersController->delete($uuid);
    }

    return Flight::halt(405);
});

Flight::route('GET /admin/plans', [$plansController, 'index']);
Flight::route('GET /admin/plan/@uuid', [$plansController, 'edit']);
Flight::route('PATCH /admin/plan/@uuid', [$plansController, 'update']);
Flight::route('GET /admin/plans/create', [$plansController, 'create']); 
Flight::route('POST /admin/plans/create', [$plansController, 'store']);
Flight::route('DELETE /admin/plan/@uuid', [$plansController, 'delete']);
Flight::route('POST /admin/plan/@uuid', function ($uuid) use ($plansController) {
    $data = Flight::request()->data->getData();
    $method = strtoupper($data['_method'] ?? '');

    if ($method === 'PATCH') {
        return $plansController->update($uuid);
    }

    if ($method === 'DELETE') {
        return $plansController->delete($uuid);
    }

    return Flight::halt(405);
});
