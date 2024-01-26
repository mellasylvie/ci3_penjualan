<?php
class Barang_model extends CI_Model
{

    public function ambil_barang()
    {
        // Perintah ambil data barang
        return $this->db->get("barang")->result_array();
    }

    public function ambil_supplier()
    {
        return $this->db->get("supplier")->result_array();
    }

    public function tambah_barang($data)
    {
        return $this->db->insert('barang', $data);
    }
}
