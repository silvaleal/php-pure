<?php
 
namespace App\Models;

use RotyPHP\SQLite3\SQLiteModel;
 
class User extends SQLiteModel
{
    public ?string $table = 'users';
}