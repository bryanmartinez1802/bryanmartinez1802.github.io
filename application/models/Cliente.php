<?php

  class Cliente extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }


    function insertar($datos){
        return $this->db->insert('cli_fedex',$datos);
    }

    function obtenerTodos(){
        $listadoClientes=$this->db->get("cli_fedex");
        if ($listadoClientes->num_rows()>0) {

          return $listadoClientes->result();
        } else {
          return false;
        }


    }




    public function borrar ($id_cli){

     $this->db->where("id_cli",$id_cli);
     return $this->db->delete("cli_fedex");



    }

    //Funcion para consultar un pedido especifcli
    public function ObtenerporId($id_cli)
    {
      $this->db->where("id_cli",$id_cli);
      $cliente=$this->db->get("cli_fedex");
      if ($cliente->num_rows()>0){
        return $cliente->row();
      }
       return false;

    }

    public function actualizar($id_cli,$datos)
    {
      $this->db->where("id_cli",$id_cli);
      return $this->db->update("cli_fedex",$datos);
    }

  }




 ?>
