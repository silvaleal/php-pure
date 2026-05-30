<?php
 
namespace App\Models;

use RotyPHP\SQLite3\SQLiteModel;
 
class App extends SQLiteModel
{
    public ?string $table = 'app';
}