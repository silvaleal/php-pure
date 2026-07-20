<?php

namespace Database\Migrations;

use RotyPHP\SQLite3\SQLiteMigration;
 
class App extends SQLiteMigration {
    public string $table = "app";
 
    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->bool('maintenance_mode')->default(0);
    }
}