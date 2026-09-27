<?php

require __DIR__."/vendor/autoload.php";

use Database\Migrations\App;
use Dotenv\Dotenv;
use RotyPHP\MySQL\MySQLDriver;
use RotyPHP\SQLite3\SQLiteDriver;

# phpdotenv -> composer require vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

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


foreach ([
    new App()
    ] as $schema) {
    $schema->columns();

    $query = $schema->build();

    $pdo = $driver->getPDO();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($query);

    echo " SQL -> {$query}";
    echo "\n";
}
