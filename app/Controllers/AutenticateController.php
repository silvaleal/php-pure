<?php

namespace App\Controllers;

use App\Services\AutenticateService;
use Flight;
use PureSession\Session;

class AutenticateController
{
    public function __construct(
        protected AutenticateService $authService
    ) {}

    public function login()
    {
        return Flight::render('login');
    }

    public function attempt() # Método para o POST do formulário do /login
    {
        $data = Flight::request()->data->getData();

        try {
            $this->authService->login($data);

            (new Session())->set('flash.success', "Login realizado");
            return Flight::redirect("/profile");
        } catch (\Throwable $th) {
            (new Session())->set("flash.error", $th->getMessage());
            return Flight::redirect("/login");
        }
    }

    public function register()
    {
        return Flight::render('register');
    }
    public function store() # Método para o POST do formulário do /register
    {
        $data = Flight::request()->data->getData();

        try {
            $this->authService->register($data);

            (new Session())->set('flash.success', "Cadastro realizado");
            return Flight::redirect("/profile");
        } catch (\Throwable $th) {
            (new Session())->set("flash.error", $th->getMessage());
            return Flight::redirect("/register");
        }
    }
}
