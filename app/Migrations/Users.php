<?php

namespace App\Migrations;

use RotyPHP\SQLite3\SQLiteMigration;

class Users extends SQLiteMigration
{
    public string $table = "users";

    public function columns()
    {
        $this->int('id')->primKey()->autoinc();
        $this->varchar('uuid', 12);
        $this->varchar('nickname', 30);
        $this->varchar('fullName', 30);
        $this->varchar('email', 30);
        $this->varchar('password', 255);
        $this->datetime('birthdate');
    }
}