<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_solicitud');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
  	}

	public function index(){

		$this->load->view('v_home');
	}

	function registro() {
      	$data['error'] = EXIT_ERROR;
      	$data['msj']   = null;
		try {
			//Tabla Negocio
			$primerNombre 	= $this->input->post();
			$segundoNombre  = $this->input->post();
			$apellidos 		= $this->input->post();
			$empresa 		= $this->input->post();
			$cargo	 		= $this->input->post();
			$telefono 		= $this->input->post();
			$correo 		= $this->input->post();
			$ciudad 		= $this->input->post();
			$pais			= $this->input->post();
			//tabla persona
			$nuPasaporte 	= $this->input->post();
			$fechaEmision 	= $this->input->post();
			$fechaExpiro 	= $this->input->post();
			$paisEmisor 	= $this->input->post();
			$genero 		= $this->input->post();
			$fechaCumple 	= $this->input->post();
			$nacionalidad 	= $this->input->post();
			$ciudadReferen 	= $this->input->post();
			$flgInvitacion 	= $this->input->post();
			$asientoPrefere = $this->input->post();
			$tallaPolo 		= $this->input->post();
			//tabla itinerario
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
			$primerNombre = $this->input->post();
		} catch(Exception $ex) {
			$data['msj'] = $ex->getMessage();
		}
      	echo json_encode($data);
	}
}