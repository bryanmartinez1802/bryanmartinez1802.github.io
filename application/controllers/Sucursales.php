<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {

    function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Sucursal');
   }
  	public function nuevo()
  	{
  		$this->load->view('header');
  		$this->load->view('sucursales/nuevo');
  		$this->load->view('footer');
  	}

    public function listado()
    {
        $data['sucursales']=$this->Sucursal->obtenerTodos();
        $this->load->view('header');
		    $this->load->view('sucursales/listado',$data);
		    $this->load->view('footer');
    }

      public function reporte()
  	{
  		$data["sucursales"]=$this->Sucursal->obtenerTodos();
  		$this->load->view('header');
  		$this->load->view('sucursales/reporte',$data);
  		$this->load->view('footer');
  	}


    public function guardar(){
        $datosNuevoSucursal= array(
          "telefono_suc"=>$this->input->post('telefono_suc'),
          "direccion_suc"=>$this->input->post('direccion_suc'),
          "latitud_suc"=>$this->input->post('latitud_suc'),
          "longitud_suc"=>$this->input->post('longitud_suc'),

      );

      if ($this->Sucursal->insertar($datosNuevoSucursal))
      {
        redirect ('sucursales/listado');
      }else {
        echo "<h1>Error al insertar</h1>";
      }

    }

    public function eliminar($id_suc)
    {
      if ($this->Sucursal->borrar($id_suc)) {
        redirect('sucursales/listado');
      } else {
        echo "Error al guardar ";
      }

    }

}

?>
