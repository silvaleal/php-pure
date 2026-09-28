<?php

require __DIR__."/vendor/autoload.php";

use Database\Migrations\App;
use Dotenv\Dotenv;
use RotyPHP\RotyDatabase;
use RotyPHP\RotyDriver;
use RotyPHP\SQLite3\SQLiteDriver;

# phpdotenv -> composer require vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

# database
RotyDriver::setName("sqlite");

SQLiteDriver::define(__DIR__."/".$_ENV['DB_SQLITE_FILE']);

RotyDatabase::setConnector(RotyDriver::getDriver());

foreach ([
    new App()
    ] as $schema) {
    $schema->columns();

    $query = $schema->build();

    $pdo = RotyDatabase::getConnector();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($query);

    echo " SQL -> {$query}";
    echo "\n";
}
