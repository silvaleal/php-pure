<?php

namespace App\Models;

use RotyPHP\SQLite3\SQLiteModel;

class Users extends SQLiteModel
{
    public ?string $table = 'users';
}
