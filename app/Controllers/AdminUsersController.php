<?php

namespace App\Controllers;

use App\Services\UsersServices;
use Exception;
use Flight;

class AdminUsersController
{
    public function __construct(
        protected UsersServices $usersServices
    ) {}

    public function index()
    {
        $users = $this->usersServices->readAll();

        return Flight::render('users', ['users' => $users]);
    }

    public function create()
    {
        return Flight::render('users_create');
    }

    public function store()
    {
        try {
            $data = Flight::request()->data->getData();

            if (!isset($data['name'], $data['email'], $data['role'], $data['password'])) {
                throw new Exception('Dados inválidos');
            }

            if (strlen($data['name']) > 25) {
                throw new Exception('Nome muito longo');
            }

            if (strlen($data['email']) > 45 || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Email inválido');
            }

            if (strlen($data['role']) > 10) {
                throw new Exception('Role inválida');
            }

            if (strlen($data['password']) < 6) {
                throw new Exception('Senha muito curta');
            }

            $this->usersServices->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role' => $data['role'],
                'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ]);

            $_SESSION['notification'] = 'Usuário criado com sucesso';
            return Flight::redirect('/admin/users');
        } catch (Exception $e) {
            $_SESSION['errors'] = $e->getMessage();
            return Flight::redirect('/admin/users');
        }
    }

    public function edit($uuid)
    {
        $user = $this->usersServices->find($uuid);

        if (!$user) {
            $_SESSION['errors'] = 'Usuário não encontrado';
            return Flight::redirect('/admin/users');
        }

        return Flight::render('users_edit', ['user' => $user]);
    }

    public function update($uuid)
    {
        try {
            $data = Flight::request()->data->getData();

            if (isset($data['name']) && strlen($data['name']) > 25) {
                throw new Exception('Nome muito longo');
            }

            if (isset($data['email']) && (strlen($data['email']) > 45 || !filter_var($data['email'], FILTER_VALIDATE_EMAIL))) {
                throw new Exception('Email inválido');
            }

            if (isset($data['role']) && strlen($data['role']) > 10) {
                throw new Exception('Role inválida');
            }

            if (isset($data['password'])) {
                if (strlen(trim($data['password'])) === 0) {
                    unset($data['password']);
                } else {
                    if (strlen($data['password']) < 6) {
                        throw new Exception('Senha muito curta');
                    }

                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                }
            }

            $this->usersServices->update($uuid, $data);

            $_SESSION['notification'] = 'Usuário atualizado com sucesso';
            return Flight::redirect('/admin/user/' . $uuid);
        } catch (Exception $e) {
            $_SESSION['errors'] = $e->getMessage();
            return Flight::redirect('/admin/user/' . $uuid);
        }
    }

    public function delete($uuid)
    {
        try {
            $this->usersServices->delete($uuid);

            $_SESSION['notification'] = 'Usuário excluído com sucesso';
            return Flight::redirect('/admin/users');
        } catch (Exception $e) {
            $_SESSION['errors'] = $e->getMessage();
            return Flight::redirect('/admin/users');
        }
    }
}
