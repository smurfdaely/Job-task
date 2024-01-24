<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller
{
  public function index()
  {
    //$data['barang'] = $this->db->get('barang')->result_array();
    $data['barang'] = $this->M_barang->SemuaData();
    $this->load->view('task/index', $data);
  }
}