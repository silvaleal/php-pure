<?php

namespace App\Services;

use RotyPHP\SQLite3\SQLiteModel;

class Service {
    public function __construct(
        private SQLiteModel $model, 
    ) {}

    public function create(array $data) {
        $data['uuid'] = hash('sha256', uniqid());

        $this->model->create($data);
    }

    public function readAll() {
        return $this->model->getAll();
    }

    public function find($uuid) {
        return $this->model->where("uuid", $uuid)->getFirst();
    }

    public function update($uuid, array $data) {
        unset($data['_method']);

        return $this->model->where("uuid", $uuid)->edit($data);
    }

    public function delete($uuid) {
        return $this->model->delete(["uuid"=>$uuid]);
    }
} 
