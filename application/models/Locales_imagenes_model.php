<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales_imagenes_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_imagenes_de_locales(){
        $query = $this->db
            ->get('locales_imagenes');

        return $query;
    }

    public function get_imagenes_local_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('locales_imagenes');
        
        return $query;
    }

    public function insert_imagen_de_local($data)
    {
        $query = $this->db
            ->insert('locales_imagenes', $data);

        return $query;
    }

    public function insert_matriz_imagenes_de_locales($data)
    {
        $query = $this->db
            ->insert_batch('locales_imagenes', $data);

        return $query;
    }

    public function insert_matriz_locales_imagenes($data)
    {
        $query = $this->db
            ->insert_batch('locales_imagenes', $data);

        return $query;
    }

    public function update_local($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('locales_imagenes', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

    public function get_banner_principal_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'banner_principal')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_banner_principal_movil_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'banner_principal_movil')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_logotipo_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'logotipo')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_galeria_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'galeria')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_pickup_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'pickup')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_promociones_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'promocion')
            ->get('locales_imagenes');
        
        return $query;
    }

    public function get_eventos_por_local_id($local_id)
    {
        $query = $this->db
            ->where('estatus', 'activo')
            ->where('local_id', intval($local_id))
            ->where('tipo', 'evento')
            ->get('locales_imagenes');
        
        return $query;
    }

    /** Inicio Index */

    public function get_random_pickups()
    {
        $query = $this->db
            ->where('t1.estatus', 'activo')
            ->where('t1.tipo', 'pickup')
            ->select("
                t1.*,
                t2.url as local_url,
            ")
            ->from("locales_imagenes t1")
            ->join("locales t2", "t1.local_id = t2.id")
            ->order_by('rand()')
            ->limit(intval(12))
            ->get();
        
        return $query;
    }

    /** Promociones Index */

    public function get_promociones()
    {
        $query = $this->db
            ->where('t1.estatus', 'activo')
            ->where('tipo', 'promocion')
            ->select("
                t1.*,
                t2.url as local_url,
            ")
            ->from("locales_imagenes t1")
            ->join("locales t2", "t1.local_id = t2.id")
            ->get();
        
        return $query;
    }
}
