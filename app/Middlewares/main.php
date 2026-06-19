<?php

use App\Controllers\AutenticateController;
use App\Controllers\GuildController;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;
use App\Middlewares\AuthMiddleware;
use App\Models\User;
use App\Services\AutenticateService;
use App\Services\GuildService;

$guildController = new GuildController(new GuildService());

$authController = new AutenticateController(new AutenticateService(new User()));

Flight::route('GET /', [HomeController::class, 'index']);
Flight::route('GET /guilds', [$guildController, 'index']);

Flight::route('GET /login', [$authController, 'login']);
Flight::route('POST /login', [$authController, 'attempt']);
Flight::route('GET /register', [$authController, 'register']);
Flight::route('POST /register', [$authController, 'store']);

Flight::route('GET /profile', [ProfileController::class, 'index'])->addMiddleware(AuthMiddleware::class);
