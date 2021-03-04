<?php

namespace App\Controllers;
use App\Models\ClientesModel;


class ClientesController extends BaseController
{
    public function index()
    {
        $clientes = new ClientesModel();
        $datos = $clientes->clientList();
        $data = ["datos" => $datos];
        return view('list', $data);
    }

    public function create()
    {
        $datos = [
            "nombre_cliente" => $_POST['nombreCliente'],
            "cedula_cliente" => $_POST['cedulaCliente']
        ];
        $Crud = new ClientesModel();
        echo $Crud->insertClient($datos);
        return redirect()->to(base_url().'/');
    }

    public function update()
    {
        $datos = [
            "nombre_cliente" => $_POST['nombreCliente'],
            "cedula_cliente" => $_POST['cedulaCliente']
        ];
        $clienteId =$_POST['clienteId'];
        $Crud = new ClientesModel();
        $respuesta = $Crud->upgradeClient($datos, $clienteId);
           return redirect()->to(base_url().'/');
    }

    public function findById($clienteId)
    {
        $data = ["cliente_id" => $clienteId];
        $Crud = new ClientesModel();
        $respuesta = $Crud->getClientById($data);
        $datos = ["datos" => $respuesta];
        return view('actualizar', $datos);
    }



    public function delete($clienteId)
    {
        $Crud = new ClientesModel();
        $data = ["cliente_id" => $clienteId];
        $respuesta = $Crud->deleteClient($data);
        return redirect()->to(base_url().'/');
    }
}
