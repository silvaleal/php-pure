<?php

namespace App\Migrations;

use RotyPHP\SQLite3\SQLiteMigration;

class Users extends SQLiteMigration {
    public string $table = "users";

    public function columns() {
        $this->int('id')->primKey()->autoinc();
        $this->varchar('uuid', 255); # Na versão atual do RotyPHP, o método unique() não foi desenvolvido.
        $this->varchar('name', 25);
        $this->varchar('email', 45);
        $this->varchar('role', 10);
        $this->varchar('password', 255);

        # Na versão atual do RotyPHP, o método datetime() não foi desenvolvido.
    }
}
