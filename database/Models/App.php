<?php
 
namespace Database\Models;

use RotyPHP\SQLite3\SQLiteModel;
 
class App extends SQLiteModel
{
    public ?string $table = 'app';
}