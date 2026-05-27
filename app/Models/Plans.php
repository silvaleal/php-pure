<?php

namespace App\Models;

use RotyPHP\SQLite3\SQLiteModel;
 
# Criando nosso Model.
class Plans extends SQLiteModel
{
    public ?string $table = 'plans';    
}