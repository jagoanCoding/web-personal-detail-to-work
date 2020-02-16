<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
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
            $folder1 = $data['url'];
            $folder2 = explode('/', $folder1);
            $folder3 = $folder2[0];
            $file = ucwords($folder2[0]);
            $met = ucwords($folder2[1]);

            if (file_exists('application/controllers/' . $file . '.php')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Submenu Vailed To Added, Please Change The Url !
                    </div>');
                redirect('menu/submenu');
            } else {
                $this->db->insert('user_sub_menu', $data);

                mkdir('application/views/' . $folder3); // view folder

                fopen('application/views/' . $folder3 . '/' . strtolower($file) . '.php', 'w'); //viesw file
                $controller_file = fopen('application/controllers/' . $file . '.php', 'w'); //contoller file
                $file_lowwer = strtolower($file);
                $n1 = $data['title'] = 'Submenu Management';
                $n2 = $this->load->view('templates/user_sidebar', $data);
                $n3 = $this->load->view('templates/user_topbar', $data);
                $n4 = $this->load->view('templates/user_footer');
                $isiController = "<?php
                defined('BASEPATH') or exit('No direct script access allowed');
                
                class " . "$file" . " extends CI_Controller
                {
                    public function " . "$met" . "()
                    {" .
                    $n1 .
                    $n2 .
                    $n3 .
                    "$" . "this->load->" . "view('" . "$folder3" . "/" . "$file_lowwer'" . ");" .
                    $n4 . "
                    }
                };";
                fwrite($controller_file, $isiController);


                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Submenu Success Added! 
                    </div>');
                redirect('menu/submenu');
            }
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

    public function deleteSubMenu()
    {
        $this->load->helper('file');
        $data['edit'] = $this->db->get('user_menu')->result_array();
        $id = $_GET['id'];
        $q = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
        $name_File = $q['url'];
        $q1 = explode('/', $name_File);
        $result = ucwords($q1[0]);

        if (file_exists($d_f = 'application/controllers/' . $result . '.php')) {
            $del = unlink($d_f);
            if ($del) {
                $d_v_f = 'application/views/' . strtolower($result) . '/' . strtolower($result)  . '.php';
                $del = unlink($d_v_f);
                $d_v_fi = 'application/views/' . strtolower($result);
                $del = rmdir($d_v_fi);
                $this->db->delete('user_sub_menu', array('id' => $id));
            }
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Submenu Success Removed!
            </div>');
        redirect('menu/submenu');
    }
}
