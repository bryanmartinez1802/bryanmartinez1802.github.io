<?php

  class Pedido extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }


    function insertar($datos){
        return $this->db->insert('ped_fedex',$datos);
    }

    function obtenerTodos(){
        $listadoPedidos=$this->db->get("ped_fedex");
        if ($listadoPedidos->num_rows()>0) {

          return $listadoPedidos->result();
        } else {
          return false;
        }


    }




    public function borrar ($id_ped){

     $this->db->where("id_ped",$id_ped);
     return $this->db->delete("ped_fedex");



    }
    //Funcion para obtener El listad de la tabla de clientes
    public function obtenerClientes()
    {

      $listadoClientes=$this->db->get("cli_fedex");
      if ($listadoClientes->num_rows()>0) {

        return $listadoClientes->result();
      } else {
        return false;
      }

    }

    public function ObtenerporNombre($id_cli)
    {
      $this->db->where("id_cli",$id_cli);
      $cliente=$this->db->get("cli_fedex");
      if ($cliente->num_rows()>0){
        return $cliente->row();
      }
       return false;

    }

    //Funcion para consultar un pedido especifico
    public function ObtenerporId($id_ped)
    {
      $this->db->where("id_ped",$id_ped);
      $pedido=$this->db->get("ped_fedex");
      if ($pedido->num_rows()>0){
        return $pedido->row();
      }
       return false;

    }
    //funcion para actualizar un instructor
    public function actualizar($id_ped,$datos)
    {
      $this->db->where("id_ped",$id_ped);
      return $this->db->update("ped_fedex",$datos);
    }



  }




 ?>
