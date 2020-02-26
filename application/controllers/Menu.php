<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/user_footer');
        } else {
            if ($this->input->post('for') == 1) {
                $mnu = $this->input->post('menu');
                $this->db->insert('user_menu', ['menu' => ucwords($mnu)]);

                $m = $this->db->get_where('user_menu', ['menu' => $mnu])->row_array();

                $this->db->insert('user_access_menu', ['role_ID' => '1', 'menu_id' => $m['id']]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Menu added!
                </div>');
                redirect('menu');
            } elseif ($this->input->post('for') == 2) {
                $mnu = $this->input->post('menu');
                $this->db->insert('user_menu', ['menu' => ucwords($mnu)]);

                $m = $this->db->get_where('user_menu', ['menu' => $mnu])->row_array();

                $this->db->insert('user_access_menu', ['role_ID' => '2', 'menu_id' => $m['id']]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Menu Succes Added!
                </div>');
                redirect('menu');
            } elseif ($this->input->post('for') == 0) {
                $mnu = $this->input->post('menu');
                $this->db->insert('user_menu', ['menu' => ucwords($mnu)]);

                $m = $this->db->get_where('user_menu', ['menu' => $mnu])->row_array();

                $this->db->insert('user_access_menu', ['role_ID' => '1', 'menu_id' => $m['id']]);
                $this->db->insert('user_access_menu', ['role_ID' => '2', 'menu_id' => $m['id']]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Menu Success Added!
                </div>');
                redirect('menu');
            }
        }
    }

    public function subMenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_Model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Submenu Success Added! 
                    </div>');
            redirect('menu/submenu');
        }
    }

    public function editmenu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['id'] = $_GET['id'];
        $menu = $this->input->post('menu');

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/editmenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->db->set('menu', $menu);
            $this->db->where('id', $data['id']);
            $this->db->update('user_menu');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Edit menu success! 
                    </div>');
            redirect('menu');
        }
    }

    public function deleteMenu()
    {
        $data['edit'] = $this->db->get('user_menu')->result_array();

        $id = $_GET['id'];
        $this->db->delete('user_menu', array('id' => $id));
        $this->db->delete('user_access_menu', array('menu_id' => $id));
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Menu Succes Removed!
            </div>');
        redirect('menu');
    }

    public function editSubMenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_Model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['id'] = $_GET['id'];
        $title = $this->input->post('title');
        $menu = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $active = $this->input->post('is_active');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/editsubmenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->db->set('title', $title);
            $this->db->set('menu_id', $menu);
            $this->db->set('url', $url);
            $this->db->set('icon', $icon);
            $this->db->set('is_active', $active);
            $this->db->where('id', $data['id']);
            $this->db->update('user_sub_menu');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Edit submenu seccess!
            </div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubMenu()
    {
        $this->load->helper('file');
        $data['edit'] = $this->db->get('user_menu')->result_array();
        $id = $_GET['id'];

        $this->db->delete('user_sub_menu', array('id' => $id));

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Submenu Success Removed!
            </div>');
        redirect('menu/submenu');
    }
}
