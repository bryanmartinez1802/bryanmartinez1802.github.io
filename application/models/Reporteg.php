<?php

  class Reporteg extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }



      function obtenerSucursales(){
          $listadoSucursales=$this->db->get("sucu_fedex");
          if ($listadoSucursales->num_rows()>0) {

            return $listadoSucursales->result();
          } else {
            return false;
          }


      }
      function obtenerPedidos(){
          $listadoPedidos=$this->db->get("ped_fedex");
          if ($listadoPedidos->num_rows()>0) {

            return $listadoPedidos->result();
          } else {
            return false;
          }


      }
      function obtenerClientes(){
          $listadoClientes=$this->db->get("cli_fedex");
          if ($listadoClientes->num_rows()>0) {

            return $listadoClientes->result();
          } else {
            return false;
          }


      }







  }




 ?>
