<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_reporte');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
		if($this->session->userdata('usuario') == null){
			header("location: Login");
		}
        $datos = $this->M_reporte->getDatosUser();
        $html  = '';
        $cont  = 1;
        if(count($datos) == 0) {
            $html = '';
        }else {
            foreach ($datos as $key){
                $html .= '<tr class="tr-cursor-pointer tr-ver-info-solicitud" data-idSolicitud="'.$cont.'">
                            <td class="text-center">'.$key->primer_nombre.' '.$key->apellidos.'</td>
                            <td class="text-center">'.$key->empresa.'</td>
                            <td class="text-center">'.$key->correo.'</td>
                            <td class="text-center">'.$key->fecha_registro.'</td>
                            <td class="text-center" style="display: none;">'.$key->nu_pasaporte.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_emision.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_expiro.'</td>
                            <td class="text-center" style="display: none;">'.$key->pais_emisor.'</td>
                            <td class="text-center" style="display: none;">'.$key->genero.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_cumple.'</td>
                            <td class="text-center" style="display: none;">'.$key->nacionalidad.'</td>
                            <td class="text-center" style="display: none;">'.$key->ciudad_referencia.'</td>
                            <td class="text-center" style="display: none;">'.$key->asiento_preferencia.'</td>
                            <td class="text-center" style="display: none;">'.$key->talla_polo.'</td>
                            <td class="text-center" style="display: none;">'.$key->nombre_reconocimiento.'</td>
                            <td class="text-center" style="display: none;">'.$key->restriccion_dieta.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_check_in.'</td>
                            <td class="text-center" style="display: none;">'.$key->fecha_check_out.'</td>
                            <td class="text-center" style="display: none;">'.$key->necesidad_especial.'</td>
                            <td class="text-center" style="display: none;">'.$key->vuelo_ida_origen.'</td>
                            <td class="text-center" style="display: none;">'.$key->dia_vuelo_ida.'</td>
                            <td class="text-center" style="display: none;">'.$key->hora_vuelo_ida.'</td>
                            <td class="text-center" style="display: none;">'.$key->vuelo_retorno_origen.'</td>
                            <td class="text-center" style="display: none;">'.$key->dia_vuelo_retorno.'</td>
                            <td class="text-center" style="display: none;">'.$key->hora_vuelo_retorno.'</td>
                            <td class="text-center" style="display: none;">'.$key->aerolinea1.'</td>
                            <td class="text-center" style="display: none;">'.$key->codigo_aero_1.'</td>
                            <td class="text-center" style="display: none;">'.$key->aerolinea2.'</td>
                            <td class="text-center" style="display: none;">'.$key->codigo_aero_2.'</td>
                            <td class="text-center" style="display: none;">'.$key->aerolinea3.'</td>
                            <td class="text-center" style="display: none;">'.$key->codigo_aero_3.'</td>
                            <td class="text-center" style="display: none;">'.$key->ultima_dia_modificacion.'</td>
                            <td class="text-center" style="display: none;">'.$key->ultimo_dia_cancela.'</td>
                            <td class="text-center" style="display: none;">'.$key->nombre.'</td>
                            <td class="text-center" style="display: none;">'.$key->telefono.'</td>
                            <td class="text-center" style="display: none;">'.$key->relacion.'</td>
                            <td class="text-center" style="display: none;">'.$key->adicional.'</td>
                        </tr>';
                $cont++;
            }
        }
		$data['html'] = $html;
		$this->load->view('v_admin', $data);
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
