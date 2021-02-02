<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickup_model extends CI_Model {

    /** Metodos Basicos [Inicio] */
    public function get_pickups(){
        $query = $this->db
            ->where('tipo', 'pickup')
            ->get('locales_imagenes');

        return $query;
    }

    public function get_pickup_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('locales_imagenes');
        
        return $query;
    }

    public function insert_pickup($data)
    {
        $query = $this->db
            ->insert('locales_imagenes', $data);

        return $query;
    }

    public function insert_matriz_pickups($data)
    {
        $query = $this->db
            ->insert_batch('locales_imagenes', $data);

        return $query;
    }

    public function update_pickup($id, $data)
    {
        $query = $this->db
            ->where('id', $id)
            ->update('locales', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

    public function get_pickups_de_restaurantes(){
        $query = $this->db
            ->where("t1.estatus", "activo")
            ->where("t1.tipo", "pickup")
            ->where_in("t4.nombre", array('RESTAURANTES', 'MERCADO SOLESTA'))
            ->select("
                t1.*,
                t2.url as local_url,
                t2.telefono_1 as local_telefono_1,
            ")
            ->from("locales_imagenes t1")
            ->join("locales t2", "t1.local_id = t2.id")
            ->join("relacion_locales_categorias t3", "t2.id = t3.local_id")
            ->join("categorias t4", "t3.categoria_id = t4.id")
            ->order_by("t2.nombre asc")
            ->get();

        return $query;
    }
    
    public function get_pickups_de_shopping(){
        $query = $this->db
            ->where("t1.estatus", "activo")
            ->where("t1.tipo", "pickup")
            ->where_in("t4.nombre", array('SHOPPING', 'ACCESORIOS', 'HOGAR', 'WELLNESS'))
            ->select("
                t1.*,
                t2.url as local_url,
                t2.telefono_1 as local_telefono_1,
            ")
            ->from("locales_imagenes t1")
            ->join("locales t2", "t1.local_id = t2.id")
            ->join("relacion_locales_categorias t3", "t2.id = t3.local_id")
            ->join("categorias t4", "t3.categoria_id = t4.id")
            ->order_by("t2.nombre asc")
            ->get();

        return $query;
    }
}
