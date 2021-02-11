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

    public function get_categorias_por_local($local_id)
    {
        $query = $this->db
        ->where("t2.local_id", intval($local_id))
        ->select("
            t1.*,
        ")
        ->from("categorias t1")
        ->join("relacion_locales_categorias t2", "t1.id = t2.categoria_id")
        ->order_by("t1.nombre asc")
        ->get();
        
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
