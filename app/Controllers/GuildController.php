<?php

namespace App\Controllers;

use App\Services\GuildService;
use Flight;

class GuildController
{
    public function __construct(
        protected GuildService $guildService
    ) {
    }

    public function index()
    {
        return Flight::render('guild/home');
    }

}