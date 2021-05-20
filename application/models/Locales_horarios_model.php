<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales_horarios_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_horarios_de_locales(){
        $query = $this->db
            ->get('locales_horarios');

        return $query;
    }

    public function get_horario_de_local_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('locales_horarios');
        
        return $query;
    }

    public function insert_horario_de_local($data)
    {
        $query = $this->db
            ->insert('locales_horarios', $data);

        return $query;
    }

    public function insert_matriz_horarios_de_locales($data)
    {
        $query = $this->db
            ->insert_batch('locales_horarios', $data);

        return $query;
    }

    public function update_horario_de_local($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('locales_horarios', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

    public function get_horario_de_local_por_local_id($id)
    {
        $query = $this->db
            ->where('estatus', strval('activo'))
            ->where('local_id', intval($id))
            ->get('locales_horarios');
        
        return $query;
    }
}