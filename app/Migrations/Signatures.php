<?php

namespace App\Migrations;

use RotyPHP\SQLite3\SQLiteMigration;

class Signatures extends SQLiteMigration {
    public string $table = "signatures";

    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->varchar('uuid', 255); # Na versão atual do RotyPHP, o método unique() não foi desenvolvido.
        $this->varchar('name', 25);
        $this->int('planId');

        # Na versão atual do RotyPHP, o método datetime() não foi desenvolvido.
    }
}
