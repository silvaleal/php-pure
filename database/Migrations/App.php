<?php

namespace Database\Migrations;

use RotyPHP\MySQL\MySQLSchema; 
 
class App extends MySQLSchema {
    public string $table = "app";
 
    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->bool('maintenance_mode')->default(0);
    }
}