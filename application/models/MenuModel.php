<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

    public function getMenu($limit, $offset) {
        $this->db->limit($limit, $offset);
        $this->db->where('deleted', 0);
        $query = $this->db->get('menu');
        return $query->result();
    }

    public function countData() {
        $this->db->where('deleted', 0);
        return $this->db->count_all_results('menu');
    }

    public function insertMenu($data) {
        $this->db->insert('menu', $data);
    }

    public function getMenuById($id) {
        return $this->db->get_where('menu', array('id' => $id))->row();
    }

    public function edit($id, $data) {
        
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }
    public function updateMenu($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }

    public function searchMenu($keyword) {
        $this->db->like('nama', $keyword);
        $this->db->where('deleted', 0);
        $query = $this->db->get('menu');
        return $query->result();
    }

    public function softDeleteMenu($id) {
        $this->db->where('id', $id);
        $this->db->update('menu', array('deleted' => 1));
    }
}
