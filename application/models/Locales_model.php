<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales_model extends CI_Model {

	public function get_lista_de_locales_con_detalles()
	{
        $query = $this->db
            ->select("
                t1.*,
            ")
            ->from("locales t1")
            ->get();

        return $query;
    }
    
    function buscador_locales($busqueda = null, $categoria = null)
    {
        $this->db->where('t2.estatus', 'activo');
        $this->db->where('t3.estatus', 'activo');

        if($categoria != '')
        {
            $this->db->where('t3.id', $categoria);
        }

        if($busqueda != '')
        {
            $this->db->like('t1.nombre', $busqueda);
            $this->db->or_like('t3.nombre', $busqueda);
        }

        $this->db->select("
            t1.*,
        ");
        $this->db->from("locales t1");
        $this->db->join("relacion_locales_categorias t2", "t1.id = t2.local_id", "left");
        $this->db->join("categorias t3", "t2.categoria_id = t3.id", "left");
        $this->db->group_by('t1.id');

        return $this->db->get();
    }
}
