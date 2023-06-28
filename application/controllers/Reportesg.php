<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportesg extends CI_Controller {

  function __construct()
 {
   parent::__construct();
   //Cargar el modelo
   $this->load->model('Reporteg');
 }
	public function reporte()
	{
    $data['sucursales']=$this->Reporteg->obtenerSucursales();
    $data['pedidos']=$this->Reporteg->obtenerPedidos();
    $data['clientes']=$this->Reporteg->obtenerClientes();
		$this->load->view('header');
		$this->load->view('reportesg/reporte',$data);
		$this->load->view('footer');
	}

}
