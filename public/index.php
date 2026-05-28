<?php 

require __DIR__."/../bootstrap.php";

## Maintenance mode

if (True) {
    echo "Maintenance mode is on. Please check back later.";
    die;
}