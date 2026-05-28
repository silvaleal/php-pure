<?php 

use Dotenv\Dotenv;
use RotyPHP\Database;

session_start();

require __DIR__."/vendor/autoload.php";

# phpdotenv -> composer require vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

# RotyPHP -> composer require silvaleal/rotyphp
Database::setConnector(__DIR__ . "/database.db");

# FlightPHP -> composer require flightphp/core
require __DIR__."/app/Routes/main.php";

Flight::set('flight.log_errors', true);
Flight::set('flight.handle_errors', true);
Flight::set("flight.views.path", __DIR__."/app/Views");

Flight::start();