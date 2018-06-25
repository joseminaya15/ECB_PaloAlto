<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_solicitud');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
  	}

	public function index()
	{
		$this->load->view('v_register');
	}

	function register() {
      	$data['error'] = EXIT_ERROR;
      	$data['msj']   = null;
		try {
			//Tabla Negocio
			$primerNombre 	= $this->input->post('primerNombre');
			$segundoNombre  = $this->input->post('segundoNombre');
			$apellidos 		= $this->input->post('apellidos');
			$empresa 		= $this->input->post('empresa');
			$cargo	 		= $this->input->post('cargo');
			$telefono 		= $this->input->post('telefono');
			$correo 		= $this->input->post('correo');
			$ciudad 		= $this->input->post('ciudad');
			$pais			= $this->input->post('pais');
			//tabla persona
			$nuPasaporte 	= $this->input->post('nuPasaporte');
			$fechaEmision 	= $this->input->post('fechaEmision');
			$fechaExpiro 	= $this->input->post('fechaExpiro');
			$paisEmisor 	= $this->input->post('paisEmisor');
			$genero 		= $this->input->post('genero');
			$fechaCumple 	= $this->input->post('fechaCumple');
			$nacionalidad 	= $this->input->post('nacionalidad');
			$ciudadReferen 	= $this->input->post('ciudadReferen');
			$flgInvitacion 	= $this->input->post('flgInvitacion');
			$asientoPrefere = $this->input->post('asientoPrefere');
			$tallaPolo 		= $this->input->post('tallaPolo');
			//tabla itinerario
			$reconocimiento   = $this->input->post('reconocimiento');
			$restriccionDieta = $this->input->post('restriccionDieta');
			$checkInDate 	  = $this->input->post('checkInDate');
			$checkOutDate	  = $this->input->post('checkOutDate');
			$necesidadEspe    = $this->input->post('necesidadEspe');
			$origenPartida    = $this->input->post('origenPartida');
			$destinoPartida   = $this->input->post('destinoPartida');
			$diaVueloOrigen   = $this->input->post('diaVueloOrigen');
			$HoraVueloOrigen  = $this->input->post('HoraVueloOrigen');
			$origenRetorno    = $this->input->post('origenRetorno');
			$destinoRetorno   = $this->input->post('destinoRetorno');
			$diaVueloRetorno  = $this->input->post('diaVueloRetorno');
			$HoraVueloRetorno = $this->input->post('HoraVueloRetorno');
			$aerolinea1		  = $this->input->post('aerolinea1');
			$codigoAero1 	  = $this->input->post('codigoAero1');
			$aerolinea2	 	  = $this->input->post('aerolinea2');
			$codigoAero2 	  = $this->input->post('codigoAero2');
			$aerolinea3 	  = $this->input->post('aerolinea3');
			$codigoAero3 	  = $this->input->post('codigoAero3');
			$confirmacion 	  = $this->input->post('confirmacion');
			$ultimoDiaModifica= $this->input->post('ultimoDiaModifica');
			$ultimoDiaCancela = $this->input->post('ultimoDiaCancela');
			//Tabla Contacto Emergencia
			$nombreContacto = $this->input->post('nombreContacto');
			$telefonoContac = $this->input->post('telefonoContac');
			$relacion 		= $this->input->post('relacion');
			$especificacion = $this->input->post('especificacion');

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