<?php

class M_reporte extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getDatosUser() {
        $sql = "SELECT n.primer_nombre,
                       n.apellidos,
                       n.empresa,
                       n.correo,
                       n.fecha_registro,
                       p.*,
                       i.*,
                       ce.*
                  FROM negocio n,
                       persona p,
                       itinerario i,
                       contacto_emergencia ce
                 WHERE n.id_negocio = p._id_negocio
                   AND n.id_negocio = i._id_negocio
                   AND n.id_negocio = ce._id_negocio";
        $result = $this->db->query($sql);
        return $result->result();
    }
}