<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Cliente');
   }

    public function index()
    {
      $this->load->view('header');
      $this->load->view('clientes/index');
      $this->load->view('footer');
    }
  	public function nuevo()
  	{
  		$this->load->view('header');
  		$this->load->view('clientes/nuevo');
  		$this->load->view('footer');
  	}

    public function listado()
    {
        $data['clientes']=$this->Cliente->obtenerTodos();
        $this->load->view('header');
		    $this->load->view('clientes/listado',$data);
		    $this->load->view('footer');
    }
    public function editar($id_cli)
    {
      $data['clienteeditar']=$this->Cliente->ObtenerporId($id_cli);
      $this->load->view('header');
      $this->load->view('clientes/editar',$data);
      $this->load->view('footer');
    }

      public function reporte()
  	{
  		$data["clientes"]=$this->Cliente->obtenerTodos();
  		$this->load->view('header');
  		$this->load->view('clientes/reporte',$data);
  		$this->load->view('footer');
  	}


    public function guardar(){
        $datosNuevoCliente= array(
          "nombre_cli"=>$this->input->post('nombre_cli'),
          "apellido_cli"=>$this->input->post('apellido_cli'),
          "cedula_cli"=>$this->input->post('cedula_cli'),
          "correo_cli"=>$this->input->post('correo_cli'),
          "telefono_cli"=>$this->input->post('telefono_cli'),
          "domicilio_cli"=>$this->input->post('domicilio_cli'),
          "latitud_cli"=>$this->input->post('latitud_cli'),
          "longitud_cli"=>$this->input->post('longitud_cli'),

      );

      if ($this->Cliente->insertar($datosNuevoCliente))
      {
        $this->session->set_flashdata("confirmacion","Cliente registrado existosamente");

      }else {
        $this->session->set_flashdata("error","Error al registrar intente de nuevo");

      }redirect ('clientes/listado');

    }

    public function eliminar($id_cli)
    {
      if ($this->Cliente->borrar($id_cli)) {
        $this->session->set_flashdata("confirmacion","Cliente borrado existosamente");
      } else {
        $this->session->set_flashdata("error","Error al registrar intente de nuevo");

      }redirect('clientes/listado');

    }

    //procesar actualizacion
    public function procesoActualizar()
    {
      $datosEditar = array(
        "nombre_cli"=>$this->input->post('nombre_cli'),
        "apellido_cli"=>$this->input->post('apellido_cli'),
        "cedula_cli"=>$this->input->post('cedula_cli'),
        "correo_cli"=>$this->input->post('correo_cli'),
        "telefono_cli"=>$this->input->post('telefono_cli'),
        "domicilio_cli"=>$this->input->post('domicilio_cli'),
        "latitud_cli"=>$this->input->post('latitud_cli'),
        "longitud_cli"=>$this->input->post('longitud_cli'),
      );
      $id_cli=$this->input->post("id_cli");
      if ($this->Cliente->actualizar($id_cli,$datosEditar)) {
        $this->session->set_flashdata("confirmacion","Cliente editado existosamente");
      } else {

      } redirect ("/clientes/listado");

    }

}

?>
