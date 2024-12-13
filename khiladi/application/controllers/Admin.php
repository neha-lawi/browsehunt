<?php 
class Admin extends LD_Controller{
    function __construct(){
        parent::__construct();
        

        //Check if user session is set or if the user has logged out
        if($this->userId() == false){
            redirect("login");
        }

        //Load Authentication Model to verify user
        $this->load->model("AuthModel", "auth");
        $this->load->model("AdminModel");
    }
    public function changePassword(){
        $user_id = $this->userId();

        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        $this->form_validation->set_rules('oldpass', 'Old Password', 'required');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|matches[newpass]');

        if($this->form_validation->run() == false){
            $this->load->view('admin/changepassword', '', true);
        }else{
            $old_pass = md5($this->input->post('oldpass'));
            $access = $this->auth->checkOldPass($old_pass, $user_id);
            // print_r($access);exit;
            if($access == false){
                $this->session->set_flashdata('errormsg', 'Invalid Credentials');
                redirect('login');
            }else{
                $this->auth->updatepass($user_id, $new_pass);
                $this->session->set_flashdata('passupdate', 'Password Updated!');
                redirect('dashboard');
            }
        }
        
    }

    public function users(){
        $data['usertype'] = $this->userType();
        $data['orgId'] = $this->orgId();
        $data['details'] = $this->AdminModel->getUsers();
        $html = $this->load->view('admin/users', $data, true);
        $this->displayAppPage("Users Panel", $html);
    }

    public function addUser(){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('org', 'Organisation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[admin_master.email]|valid_email');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');
        if($this->form_validation->run() == false){
            $data['organisations'] = $this->db->get('organisations')->result_array();
            // echo "<pre>";print_r($data['organisations']);exit;

            $html = $this->load->view('admin/addUser', $data, true);
            $this->displayAppPage("Users Panel", $html);
        } else{
            $this->AdminModel->addUser();
            $this->session->set_flashdata('addUser', 'User Added');
            redirect('admin/users');
        }
    }
    public function editUser($id){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('org', 'Organisation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        if($this->form_validation->run() == false){
            $data['organisations'] = $this->db->get('organisations')->result_array();
            // echo "<pre>";print_r($data['organisations']);exit;
            $data['details'] = $this->db->get_where('admin_master', array('id' => $id))->row_array();
            $html = $this->load->view('admin/editUser', $data, true);
            $this->displayAppPage("Users Panel", $html);
        } else{
            $this->AdminModel->editUser($id);
            $this->session->set_flashdata('editUser', 'User Updated');
            redirect('admin/users');
        }
    }

    public function deleteUser($id){
        $this->AdminModel->deleteUser($id);
        $this->session->set_flashdata('deleteUser', 'User Deleted');
        redirect('admin/users');
    }

    #For Organisations
    public function organisations(){
        $data['usertype'] = $this->userType();
        $data['orgId'] = $this->orgId();
        $data['details'] = $this->db->get('organisations')->result_array();
        $html = $this->load->view('admin/organisations', $data, true);
        $this->displayAppPage("Organisations Panel", $html);
    }
    public function addOrganisation(){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[organisations.name]');
        if($this->form_validation->run() == false){
            $html = $this->load->view('admin/addOrganisation', '', true);
            $this->displayAppPage("Organisations Panel", $html);
        } else{
            $this->AdminModel->addOrganisation();
            $this->session->set_flashdata('addOrganisation', 'Organisation Added');
            redirect('admin/Organisations');
        }
    }
    public function editOrganisation($id){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() == false){
            $data['details'] = $this->db->get_where('organisations', array('id' => $id))->row_array();
            $html = $this->load->view('admin/editOrganisation', $data, true);
            $this->displayAppPage("Organisations Panel", $html);
        } else{
            $this->AdminModel->editOrganisation($id);
            $this->session->set_flashdata('editOrganisation', 'Organisation Updated');
            redirect('admin/Organisations');
        }
    }

    public function deleteOrganisation($id){
        $this->AdminModel->deleteOrganisation($id);
        $this->AdminModel->deleteOrgMapping($id);
        $this->session->set_flashdata('deleteOrganisation', 'Organisation Deleted');
        redirect('admin/Organisations');
    }

    public function moduleAccess($organisation_id){
        if(empty($this->input->post())){
            $data['brands'] = $this->AdminModel->getBrands();
            $data['brandPermissions'] = $this->db->get_where('brands_access', array('organisation_id' => $organisation_id))->result_array();
            $html = $this->load->view('admin/moduleAccess', $data, true);
            $this->displayAppPage("Users Panel", $html);
        }else{
            $checkBoxes = $this->input->post('checkBox');
            $this->AdminModel->brandAccess($organisation_id, $checkBoxes);
            redirect('admin/organisations');
            
        }
    }

    #For Platforms
    public function platforms(){
        $data['usertype'] = $this->userType();
        $data['orgId'] = $this->orgId();
        $data['details'] = $this->db->get('publisher_tables')->result_array();
        $html = $this->load->view('admin/platforms', $data, true);
        $this->displayAppPage("Platform Panel", $html);
    }

    public function brands($table_id){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('brand_id', 'Brand ID', 'required');
        $this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
        if($this->form_validation->run() == false){
            $data['curr_url'] = current_url();
            $data['table_id'] = $table_id;
            $data['details'] = $this->db->get_where('brands_table_mapping', array('table_id' => $table_id))->result_array();
            $html = $this->load->view('admin/brands', $data, true);
            $this->displayAppPage("Brands Panel", $html);
        } else{
            $exist = $this->db->get_where('brands_table_mapping', array('brand_id' => $this->input->post('brand_id'), 'table_id' => $table_id))->num_rows();
            if($exist > 0){
                $this->session->set_flashdata('brandAdd', 'Brand already exists!');
                redirect('admin/brands/'.$table_id);
            }else{
                $this->AdminModel->addBrand($table_id);
                $this->session->set_flashdata('brandAdd', 'Brand Added!');
                redirect('admin/brands/'.$table_id);
            }
        } 
    }

    public function addBrand($table_id){
        $exist = $this->db->get_where('brands_table_mapping', array('brand_id' => $this->input->post('brand_id'), 'table_id' => $table_id))->num_rows();
        if($exist > 0){
            $this->session->set_flashdata('brandAdd', 'Brand already exists!');
            redirect('admin/brands');
        }else{
            $this->AdminModel->addBrand($table_id);
            $this->session->set_flashdata('brandAdd', 'Brand Added!');
            redirect('admin/brands');
        }
    }

    public function updateBrand(){
        $this->AdminModel->updateBrand();
    }
    public function deleteBrand(){
        $this->AdminModel->deleteBrand();
    }

    # For restriction
    public function restriction($org_id){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('brand_id', 'Brand ID', 'required');
        $this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
        if($this->form_validation->run() == false){
            $data['curr_url'] = current_url();
            $data['table_id'] = $table_id;
            $data['details'] = $this->db->get_where('brands_table_mapping', array('table_id' => $table_id))->result_array();
            $html = $this->load->view('admin/brands', $data, true);
            $this->displayAppPage("Brands Panel", $html);
        } else{
            $exist = $this->db->get_where('brands_table_mapping', array('brand_id' => $this->input->post('brand_id'), 'table_id' => $table_id))->num_rows();
            if($exist > 0){
                $this->session->set_flashdata('brandAdd', 'Brand already exists!');
                redirect('admin/brands/'.$table_id);
            }else{
                $this->AdminModel->addBrand($table_id);
                $this->session->set_flashdata('brandAdd', 'Brand Added!');
                redirect('admin/brands/'.$table_id);
            }
        } 
    }

}
?>