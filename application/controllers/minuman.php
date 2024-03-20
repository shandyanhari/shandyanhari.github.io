<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class minuman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load library database
    }

    public function index() {
        // Ambil data menu dari database
        $data['minuman_items'] = $this->db->get('menu_minuman')->result_array();

        // Tampilkan view dengan data menu
        $this->load->view('minuman_view', $data);
    }
}