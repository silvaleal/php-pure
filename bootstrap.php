<?php

use Dotenv\Dotenv;
use PureSession\PureSession;
use RotyPHP\MySQL\MySQLDriver;
use RotyPHP\RotyDatabase;
use RotyPHP\SQLite3\SQLiteDriver;

require __DIR__ . "/vendor/autoload.php";

# puresession -> composer require silvaleal/puresession
PureSession::start();

# phpdotenv -> composer require vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

# RotyPHP -> composer require silvaleal/rotyphp
switch ($_ENV['DB_DRIVER']) {
    case 'sqlite':
        $driver = new SQLiteDriver(__DIR__ . "/".$_ENV['DB_SQLITE_FILE']);
        break;

    case 'mysql':
        $driver = new MySQLDriver(
            $_ENV['DB_MYSQL_HOST'], 
            $_ENV["DB_MYSQL_USER"], 
            $_ENV["DB_MYSQL_PASSWORD"], 
            $_ENV["DB_MYSQL_DATABASE"]);
        break;

    default:
        echo "banco de dados não conhecido. Use: 'sqlite' ou 'mysql' em seu .env";
        die;
}

RotyDatabase::setConnector($driver);

# FlightPHP -> composer require flightphp/core
require __DIR__ . "/app/Routes/main.php";

$app = Flight::app();

$app->set('flight.log_errors', true);
$app->set('flight.handle_errors', true);
$app->set("flight.views.path", __DIR__ . "/app/Views");

$app->map('render', function (string $template, ?array $data = null, ?string $block = null): void {
    $latte = new Latte\Engine;

    // Onde o latte armazena seu cache
    $latte->setCacheDirectory(__DIR__ . '/cache/');

    $finalPath = Flight::get('flight.views.path') . "/" . $template . ".latte";

    $latte->render($finalPath, $data ?? [], $block);
});