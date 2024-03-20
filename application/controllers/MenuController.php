<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
    }

    public function index()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url('menucontroller/index');
        $config['total_rows'] = $this->MenuModel->countData();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['menu'] = $this->MenuModel->getMenu($config['per_page'], $this->uri->segment(3));
        $this->load->view('menu/index', $data);
    }

    public function add()
    {
        $this->load->view('menu/add');
    }

    public function save()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga')
        );

        $this->MenuModel->insertMenu($data);
        redirect('menucontroller/index');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['menu'] = $this->MenuModel->getMenuById($id);
            $this->load->view('menu/edit.php', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
            );
            $this->MenuModel->edit($id, $data);
            redirect('menucontroller/index');
        }
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['menu'] = $this->MenuModel->searchMenu($keyword);
        $this->load->library('pagination');
        $this->load->view('menu/index', $data);
    }

    public function delete($id)
    {
        $this->MenuModel->softDeleteMenu($id);
        redirect('menucontroller/index');
    }


}
