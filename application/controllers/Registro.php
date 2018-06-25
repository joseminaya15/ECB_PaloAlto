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

		$this->load->view('v_register');
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
			$reconocimiento   = $this->input->post();
			$restriccionDieta = $this->input->post();
			$checkInDate 	  = $this->input->post();
			$checkOutDate	  = $this->input->post();
			$necesidadEspe    = $this->input->post();
			$origenPartida    = $this->input->post();
			$destinoPartida   = $this->input->post();
			$diaVueloOrigen   = $this->input->post();
			$HoraVueloOrigen  = $this->input->post();
			$origenRetorno    = $this->input->post();
			$destinoRetorno   = $this->input->post();
			$diaVueloRetorno  = $this->input->post();
			$HoraVueloRetorno = $this->input->post();
			$aerolinea1		  = $this->input->post();
			$codigoAero1 	  = $this->input->post();
			$aerolinea2	 	  = $this->input->post();
			$codigoAero2 	  = $this->input->post();
			$aerolinea3 	  = $this->input->post();
			$codigoAero3 	  = $this->input->post();
			$confirmacion 	  = $this->input->post();
			$ultimoDiaModifica= $this->input->post();
			$ultimoDiaCancela = $this->input->post();
			//Tabla Contacto Emergencia
			$nombreContacto = $this->input->post();
			$telefonoContac = $this->input->post();
			$relacion 		= $this->input->post();
			$especificacion = $this->input->post();

			$insertNegocio = array('primer_nombre' 	=> $primerNombre,
								   'segundo_nombre' => $segundoNombre,
								   'apellidos' 		=> $apellidos,
								   'empresa' 		=> $empresa,
								   'cargo' 			=> $cargo,
								   'telefono' 		=> $telefono,
								   'correo' 		=> $correo,
								   'ciudad' 		=> $ciudad,
								   'pais' 			=> $pais);
			$datoInsert  = $this->M_solicitud->insertarDatos($insertNegocio, 'negocio');
			$insertPersona = array('nu_pasaporte' 		=> $nuPasaporte,
								   'fecha_emision'		=> $fechaEmision,
								   'fecha_expiro'		=> $fechaExpiro,
								   'pais_emisor'		=> $paisEmisor,
								   'genero'				=> $genero,
								   'fecha_cumple'		=> $fechaCumple,
								   'nacionalidad'		=> $nacionalidad,
								   'ciudad_referencia'	=> $ciudadReferen,
								   'flg_invitacion'		=> $flgInvitacion,
								   'asiento_preferencia'=> $asientoPrefere,
								   'talla_polo'			=> $tallaPolo,
								   '_id_negocio'		=> $datoInsert['id_negocio']);
			$insertItinerario = array('nombre_reconocimiento' => $reconocimiento,
									 'restriccion_dieta' 	  => $restriccionDieta,
									 'fecha_check_in' 		  => $checkInDate,
									 'fecha_check_out'		  => $checkOutDate,
									 'necesidad_especial' 	  => $necesidadEspe,
									 'vuelo_ida_origen' 	  => $origenPartida,
									 'vuelo_ida_destino' 	  => $destinoPartida,
									 'dia_vuelo_ida' 		  => $diaVueloOrigen,
									 'hora_vuelo_ida' 		  => $HoraVueloOrigen,
									 'vuelo_retorno_origen'   => $origenRetorno,
									 'vuelo_retorno_destino'  => $destinoRetorno,
									 'dia_vuelo_retorno' 	  => $diaVueloRetorno,
									 'hora_vuelo_retorno'  	  => $HoraVueloRetorno,
									 'aerolinea1' 		  	  => $aerolinea1,
									 'codigo_aero_1' 		  => $codigoAero1,
									 'aerolinea2' 		  	  => $aerolinea2,
									 'codigo_aero_2' 		  => $codigoAero2,
									 'aerolinea3' 		  	  => $aerolinea3,
									 'codigo_aero_3' 		  => $codigoAero3,
									 'confirmacion' 		  => $confirmacion,
									 'ultima_dia_modificacion'=> $ultimoDiaModifica,
									 'ultimo_dia_cancela' 	  => $ultimoDiaCancela,
									 '_id_negocio' 			  => $datoInsert['id_negocio']);
			$insertContacto = array('nombre' 	 => $nombreContacto, 
									'telefono' 	 => $telefonoContac,
									'relacion' 	 => $relacion,
									'adicional'  => $especificacion,
									'_id_negocio'=> $datoInsert['id_negocio']);
			$this->M_solicitud->insertarDemasDatos($insertPersona, 'persona', $insertItinerario, 'itinerario', $insertContacto, 'contacto_emergencia');
          $data['msj']   = $datoInsert['msj'];
          $data['error'] = $datoInsert['error'];
		} catch(Exception $ex) {
			$data['msj'] = $ex->getMessage();
		}
      	echo json_encode($data);
	}
}