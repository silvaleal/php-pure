<?php

require __DIR__."/../bootstrap.php";

use Database\Models\App;
## Maintenance mode

$app = (new App())->where('id', 1)->getFirst();

if ($app['maintenance_mode']) {
    Flight::render("errors/maintenance");
    die;    
}

Flight::start();
