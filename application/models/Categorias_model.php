<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function get_lista_de_categorias_activas()
	{
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('tipo', 'categoria')
            ->get('categorias');

        return $query;
    }
    
    public function get_lista_de_subcategorias_activas()
	{
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('tipo', 'subcategoria')
            ->get('categorias');

        return $query;
	}
}
