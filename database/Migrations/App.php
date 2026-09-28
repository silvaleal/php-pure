<?php

namespace Database\Migrations;

use RotyPHP\MySQL\MySQLSchema;
use RotyPHP\SQLite3\SQLiteSchema; 
 
class App extends SQLiteSchema {
    public string $table = "app";
 
    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->bool('maintenance_mode')->default(0);
    }
}