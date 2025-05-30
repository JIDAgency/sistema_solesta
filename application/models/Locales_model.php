<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Locales_model extends CI_Model
{

    /** Metodos Basicos [Inicio] */
    public function get_locales()
    {
        $query = $this->db
            ->get('locales');

        return $query;
    }

    public function get_local_por_id($id)
    {
        $query = $this->db
            ->where('id', intval($id))
            ->get('locales');

        return $query;
    }

    public function insert_local($data)
    {
        $query = $this->db
            ->insert('locales', $data);

        return $query;
    }

    public function insert_matriz_locales($data)
    {
        $query = $this->db
            ->insert_batch('locales', $data);

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
            ->update('locales', $data);

        return $query;
    }

    public function update_local_por_url($url, $data)
    {
        $query = $this->db
            ->where('url', $url)
            ->update('locales', $data);

        return $query;
    }
    /** Metodos Basicos [Fin] */

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

    public function get_locales_por_categoria_por_id($id)
    {
        $query = $this->db
            ->where("t1.estatus", "activo")
            ->where('t2.categoria_id', intval($id))
            ->select("
                t1.*,
            ")
            ->from("locales t1")
            ->join("relacion_locales_categorias t2", "t1.id = t2.local_id", "left")
            ->get();

        return $query;
    }

    public function get_locales_con_detalles_ordenados_por_categoria()
    {
        $query = $this->db
            ->where("t1.estatus", "activo")
            ->where("t2.estatus", "activo")
            ->select("
                t1.*,
                t3.nombre as categorias_nombre,
            ")
            ->from("locales t1")
            ->join("relacion_locales_categorias t2", "t1.id = t2.local_id", "left")
            ->join("categorias t3", "t2.categoria_id = t3.id", "left")
            ->order_by("t3.nombre asc")
            ->get();

        return $query;
    }

    public function get_locales_con_detalles_ordenados_por_nombre()
    {
        $query = $this->db
            ->where("t1.estatus", "activo")
            ->select("
                t1.*,
            ")
            ->from("locales t1")
            ->order_by("t1.nombre asc")
            ->get();

        return $query;
    }

    public function get_local_por_url($local)
    {
        $query = $this->db
            ->where('url', strval($local))
            ->get('locales');

        return $query;
    }

    /** Este método se usa para dar de alta los horarios y toma los locales activos y suspendidos de la base de datos. */
    public function get_locales_por_categoria_para_horarios($categorias)
    {
        $query = $this->db
            ->where_in('t2.categoria_id', $categorias)
            ->select("
                t1.*,
            ")
            ->from("locales t1")
            ->join("relacion_locales_categorias t2", "t1.id = t2.local_id", "left")
            ->get();

        return $query;
    }

    function buscador_locales($busqueda = null, $categoria = null)
    {
        $this->db->where('t2.estatus', 'activo');
        $this->db->where('t3.estatus', 'activo');

        if ($categoria != '') {
            $this->db->where('t3.id', $categoria);
        }

        if ($busqueda != '') {
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

    function obtener_islas()
    {
        $this->db->where('t1.estatus', 'activo');
        $this->db->where('t1.tipo', 'isla');
        $this->db->select("
            t1.*,
        ");
        $this->db->from("locales t1");
        $this->db->order_by('t1.nombre asc');

        return $this->db->get();
    }
}
