<?php

require __DIR__."/vendor/autoload.php";


use App\Migrations\App;
use RotyPHP\Database;

$database = Database::setConnector(__DIR__."/database.db");

foreach ([
    new App()
    ] as $migration) {
    $migration->columns();

    $query = $migration->build();

    $pdo = new PDO("sqlite:database.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($query);

    echo " SQL -> {$query}";
    echo "\n";
}
