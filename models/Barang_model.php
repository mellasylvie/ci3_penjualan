<?php
class Barang_model extends CI_Model
{

    public function ambil_barang()
    {
        // Perintah ambil data barang
        return $this->db->get("barang")->result_array();
    }
}
