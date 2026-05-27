<?php

require __DIR__."/vendor/autoload.php";

use App\Migrations\Plans;
use App\Migrations\Users;
use RotyPHP\Database;

$database = Database::setConnector(__DIR__."/database.db");

foreach ([
    new Users(),
    new Plans(),
    ] as $migration) {
    $migration->columns();

    $query = $migration->build();

    $pdo = new PDO("sqlite:database.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($query);

    echo " SQL -> {$query}";
    echo "\n";
}
