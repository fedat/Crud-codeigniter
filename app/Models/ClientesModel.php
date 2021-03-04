<?php 
namespace App\Models;
use CodeIgniter\Model;

class ClientesModel extends Model
{
    public function clientList(){
        $Clientes = $this->db->query("SELECT * from cliente");
        return $Clientes->getResult();
    }

    public function insertClient($datos){
        $Clientes=$this->db->table("cliente");
        $Clientes->insert($datos);
    }

    public function getClientById($id){
        $Clientes=$this->db->table("cliente");
        $Clientes->where($id);
        return $Clientes->get()->getResultArray();
    }

    public function upgradeClient($datos, $clienteId){
        $Clientes=$this->db->table("cliente");
        $Clientes->set($datos);
        $Clientes->where('cliente_id',$clienteId);
        return $Clientes->update();
    }


    public function deleteClient($id){
        $Clientes = $this->db->table('cliente');
        $Clientes->where($id);
        return $Clientes->delete();
    }
}