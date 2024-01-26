<?php

/**
 * @property Barang_model $Barang_model
 */

class Barang extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['barang_list'] = $this->Barang_model->ambil_barang();
        $this->load->view('barang/index', $data);
    }
}
