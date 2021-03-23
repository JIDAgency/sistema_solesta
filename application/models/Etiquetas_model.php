<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etiquetas_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_etiquetas(){
        $query = $this->db
            ->order_by("nombre asc")
            ->get('etiquetas');

        return $query;
    }

    public function get_etiqueta_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('etiquetas');
        
        return $query;
    }

    public function insert_etiqueta($data)
    {
        $query = $this->db
            ->insert('etiquetas', $data);

        return $query;
    }

    public function insert_matriz_etiquetas($data)
    {
        $query = $this->db
            ->insert_batch('etiquetas', $data);

        return $query;
    }

    public function update_etiqueta($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('etiquetas', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

	public function get_lista_de_etiquetas_activas()
	{
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('tipo', 'etiqueta')
            ->get('etiquetas');

        return $query;
    }

    public function get_etiqueta_por_local_id($local_id)
    {
        $query = $this->db
            ->where('local_id', intval($local_id))
            ->get('etiquetas');
        
        return $query;
    }
}
