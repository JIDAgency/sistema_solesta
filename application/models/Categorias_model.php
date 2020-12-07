<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_categorias(){
        $query = $this->db
            ->order_by("nombre asc")
            ->get('categorias');

        return $query;
    }

    public function get_categoria_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('categorias');
        
        return $query;
    }

    public function insert_categoria($data)
    {
        $query = $this->db
            ->insert('categorias', $data);

        return $query;
    }

    public function insert_matriz_categorias($data)
    {
        $query = $this->db
            ->insert_batch('categorias', $data);

        return $query;
    }

    public function update_categoria($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('categorias', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

	public function get_lista_de_categorias_activas()
	{
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('tipo', 'categoria')
            ->get('categorias');

        return $query;
    }

    public function get_categoria_por_url($categoria)
    {
        $query = $this->db
            ->where('url', strval($categoria))
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
