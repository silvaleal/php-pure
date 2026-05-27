<?php

namespace App\Migrations;

use RotyPHP\SQLite3\SQLiteMigration;

class Plans extends SQLiteMigration {
    public string $table = "plans";

    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->varchar('uuid', 255); # Na versão atual do RotyPHP, o método unique() não foi desenvolvido.
        $this->varchar('name', 25);
        $this->varchar('description', 255);
        $this->float('price');
        # Na versão atual do RotyPHP, o método datetime() não foi desenvolvido.
    }
}
