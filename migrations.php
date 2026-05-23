<?php 

use App\Migrations\Courses;
use App\Migrations\School;
use App\Migrations\Student;
use App\Migrations\Teachers;
use RotyPHP\Database;

require __DIR__."/vendor/autoload.php";

$database = Database::setConnector(__DIR__."/database.db");

foreach ([
    
    ] as $migration) {
    $migration->columns();

    $query = $migration->build();

    $pdo = new PDO("sqlite:database2.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($query);

    echo " SQL -> {$query}";
    echo "\n";
}