<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_contactos(){
        $query = $this->db
            ->get('contactos');

        return $query;
    }

    public function get_contacto_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('contactos');
        
        return $query;
    }

    public function insert_contacto($data)
    {
        $query = $this->db
            ->insert('contactos', $data);

        return $query;
    }

    public function insert_matriz_contactos($data)
    {
        $query = $this->db
            ->insert_batch('contactos', $data);

        return $query;
    }

    public function update_contacto($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('contactos', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */
}
