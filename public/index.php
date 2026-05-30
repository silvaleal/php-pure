<?php 

use App\Models\App;

require __DIR__."/../bootstrap.php";

## Maintenance mode

$app = (new App())->where('id', 1)->getFirst();

if ($app['maintenance_mode']) {
    echo "Manutenção";
    die;    
}

Flight::start();
