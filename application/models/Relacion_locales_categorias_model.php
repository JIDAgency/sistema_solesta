<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relacion_locales_categorias_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_relacion_locales_categorias(){
        $query = $this->db
            ->get('relacion_locales_categorias');

        return $query;
    }

    public function get_relacion_local_categoria_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('relacion_locales_categorias');
        
        return $query;
    }

    public function insert_relacion_local_categoria($data)
    {
        $query = $this->db
            ->insert('relacion_locales_categorias', $data);

        return $query;
    }

    public function insert_matriz_relacion_locales_categorias($data)
    {
        $query = $this->db
            ->insert_batch('relacion_locales_categorias', $data);

        return $query;
    }

    public function update_relacion_local_categoria($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('relacion_locales_categorias', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */
}