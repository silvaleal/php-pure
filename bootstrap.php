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

$app = Flight::app();

$app->set('flight.log_errors', true);
$app->set('flight.handle_errors', true);
$app->set("flight.views.path", __DIR__."/app/Views");

$app->map('render', function(string $template, ?array $data=null, ?string $block=null): void {
    $latte = new Latte\Engine;

    // Onde o latte armazena especificamente seu cache
    $latte->setCacheDirectory(__DIR__ . '/cache/');

    $finalPath = Flight::get('flight.views.path') ."/". $template.".latte";

    $latte->render($finalPath, $data ?? [], $block);
});