<?php

namespace App\Controllers;

use App\Services\PlansServices;
use Exception;
use Flight;

class AdminPlansController {

    public function __construct(
        protected PlansServices $plansServices
    ) {}
    
    public function index() {

        $plans = $this->plansServices->readAll();

        return Flight::render("plans", ["plans"=>$plans]);
    }

    public function edit($uuid) {
        $plan = $this->plansServices->find($uuid);

        if (!$plan){
            $_SESSION['errors'] = "Plano não encontrado";
            return Flight::redirect("/admin/plans");
        }

        return Flight::render("admin_edit", ["plan"=>$plan]);
    }

    public function update($uuid) {
        try {
            $data = Flight::request()->data->getData();

            $this->plansServices->update($uuid, $data);

            $_SESSION["notification"] = "Plano atualizado com sucesso";

            return Flight::redirect('/admin/plan/'.$uuid);
        } catch (Exception $e) {
            $_SESSION["errors"] = $e->getMessage();
            return Flight::redirect('/admin/plan/'.$uuid);
        }
    }

    public function create() {
        return Flight::render("admin_create");
    }

    public function store() {
        try {
            $data = Flight::request()->data->getData();

            if (strlen($data["name"]) > 25) {
                return Flight::json(["error"=>"Nome do plano muito longo"]);
            }

            if (strlen($data["description"]) > 255) {
                return Flight::json(["error"=>"Descrição muito longo"]);
            }

            if (!filter_var($data["price"], FILTER_VALIDATE_FLOAT)) {
                return Flight::json(["error"=>"Preço inválido"]);
            }

            $this->plansServices->create($data);
            
            $_SESSION["notification"] = "Plano criado com sucesso";

            return Flight::redirect('/admin/plans');
        } catch (\Exception $e) {
            $_SESSION["errors"] = $e->getMessage();
            return Flight::redirect('/admin/plans');
        }
    }

    public function delete($uuid) {
        try {
            $this->plansServices->delete($uuid);

            $_SESSION["notification"] = "Plano excluído com sucesso";

            return Flight::redirect('/admin/plans');
        } catch(Exception $e) {
            $_SESSION["errors"] = $e->getMessage();
            return Flight::redirect('/admin/plans');
        }
    }
}