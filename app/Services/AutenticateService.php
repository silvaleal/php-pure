<?php

namespace App\Services;

use App\Models\User;
use Exception;
use PureSession\Session;

class AutenticateService
{
    public function __construct(
        protected User $userModel
    ) {}

    public function login(array $data)
    {
        $user = $this->checkUser($data);

        if (!$user || !password_verify($data['password'], $user['password'])) {
            throw new Exception("Credenciais inválidas");
        }

        $this->attempt($user);
        return true;
    }
    public function register(array $data)
    {
        $user = $this->checkUser($data);

        if (!$user) {
            throw new Exception("Usuário já existe");
        }

        $this->userModel->create([
            "email"=> $data["email"],
            "uuid" => uniqid("user"),
            "nickname"=>$data["nickname"],
            "fullName"=>$data["fullName"],
            "password"=>password_hash($data["password"], PASSWORD_DEFAULT),
            "birthdate" => $data["birthdate"],
        ]);

        $user = $this->checkUser($data);

        $this->attempt($user);
    }

    public function attempt(array $user) {
        (new Session())->set("auth", $user);
    }

    public function checkUser(array $data)
    {
        $user = $this->userModel->where('email', $data['email'])->getFirst();

        return !empty($user) ? $user : null;
    }
}
