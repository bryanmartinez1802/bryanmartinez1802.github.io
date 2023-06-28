<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Pedido');
   }

    public function index()
    {
      $data['cliente']=$this->Pedido->obtenerClientes();
      $this->load->view('header');
      $this->load->view('pedidos/index',$data);
      $this->load->view('footer');
    }


    public function listado()
    {
        $data['pedidos']=$this->Pedido->obtenerTodos();
        $this->load->view('header');
		    $this->load->view('pedidos/listado',$data);
		    $this->load->view('footer');
    }



      public function reporte()
  	{
  		$data["pedidos"]=$this->Pedido->obtenerTodos();
  		$this->load->view('header');
  		$this->load->view('pedidos/reporte',$data);
  		$this->load->view('footer');
  	}


    public function guardar(){
        $datosNuevoPedido= array(

          "nombre_cli_ped"=>$this->input->post('nombre_cli_ped'),
          "cedula_cli_ped"=>$this->input->post('cedula_cli_ped'),
          "correo_cli_ped"=>$this->input->post('correo_cli_ped'),
          "apellido_cli_ped"=>$this->input->post('apellido_cli_ped'),
          "descripcion_ped"=>$this->input->post('descripcion_ped'),
          "peso_ped"=>$this->input->post('peso_ped'),
          "latitud_ped_ori"=>$this->input->post('latitud_ped_ori'),
          "longitud_ped_ori"=>$this->input->post('longitud_ped_ori'),
          "latitud_ped_des"=>$this->input->post('latitud_ped_des'),
          "longitud_ped_des"=>$this->input->post('longitud_ped_des'),
          "idcli"=>$this->input->post('idcli')

      );

      if ($this->Pedido->insertar($datosNuevoPedido))
      {
        $this->session->set_flashdata("confirmacion","Pedido regitrado existosamente");
      }else {
        $this->session->set_flashdata("error","Error al registrar el pedido");
      }redirect ('pedidos/listado');

    }

    public function eliminar($id_ped)
    {
      if ($this->Pedido->borrar($id_ped)) {
        redirect('pedidos/listado');
      } else {
        echo "Error al guardar ";
      }

    }

    public function editar($id_ped)
    {
      $data['pedidoeditar']=$this->Pedido->ObtenerporId($id_ped);
      $this->load->view('header');
      $this->load->view('pedidos/editar',$data);
      $this->load->view('footer');
    }

    public function nuevo($id_cli)
  	{
      //aqui la llamar la data de obtener clientes por id de clientes
      $data['clientespedido']=$this->Pedido->ObtenerporNombre($id_cli);
  		$this->load->view('header');
  		$this->load->view('pedidos/nuevo',$data);
  		$this->load->view('footer');
  	}

    //procesar actualizacion
    public function procesoActualizar()
    {
      $datosEditar = array(
        "nombre_cli_ped"=>$this->input->post('nombre_cli_ped'),
        "cedula_cli_ped"=>$this->input->post('cedula_cli_ped'),
        "correo_cli_ped"=>$this->input->post('correo_cli_ped'),
        "apellido_cli_ped"=>$this->input->post('apellido_cli_ped'),
        "descripcion_ped"=>$this->input->post('descripcion_ped'),
        "peso_ped"=>$this->input->post('peso_ped'),
        "latitud_ped_ori"=>$this->input->post('latitud_ped_ori'),
        "longitud_ped_ori"=>$this->input->post('longitud_ped_ori'),
        "latitud_ped_des"=>$this->input->post('latitud_ped_des'),
        "longitud_ped_des"=>$this->input->post('longitud_ped_des'),
      );
      $id_ped=$this->input->post("id_ped");
      if ($this->Pedido->actualizar($id_ped,$datosEditar)) {
        $this->session->set_flashdata("confirmacion","Pedido editado existosamente");

      } else {
        $this->session->set_flashdata("error","Error al editar el pedido");
      }redirect ("/pedidos/listado");

    }

}//cierre

?>
