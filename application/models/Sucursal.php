<?php

  class Sucursal extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }


    function insertar($datos){
        return $this->db->insert('sucu_fedex',$datos);
    }

    function obtenerTodos(){
        $listadoSucursales=$this->db->get("sucu_fedex");
        if ($listadoSucursales->num_rows()>0) {

          return $listadoSucursales->result();
        } else {
          return false;
        }


    }




    public function borrar ($id_suc){

     $this->db->where("id_suc",$id_suc);
     return $this->db->delete("sucu_fedex");



    }

  }




 ?>
