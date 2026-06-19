<?php 

use Dotenv\Dotenv;
use PureSession\Session;
use RotyPHP\Database;

require __DIR__."/vendor/autoload.php";

# Sessão
# Para este projeto, resolvi instalar uma biblioteca de terceiro, então substitui o `session_start();` para o código abaixo.
$session = new Session();
$session->start();

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
    global $session;

    $latte = new Latte\Engine;
    $templateData = [
        'session' => $session,
        ...($data ?? []),
    ];

    // Onde o latte armazena especificamente seu cache
    $latte->setCacheDirectory(__DIR__ . '/cache/');

    $finalPath = Flight::get('flight.views.path') ."/". $template.".latte";

    $latte->render($finalPath, $templateData, $block);
});