<?php 
class AuthModel extends CI_Model{
    public function checkAccess($email, $password){
        $query = $this->db->get_where('admin_master', array('email'=> $email, 'password' => md5($password)));
        if($query->num_rows() > 0){
            $row = $query->row_array();
            return $row;
        }else{
            return FALSE;
        }
    }
    public function updatepass($userid){
        $this->db->set('password', md5($this->input->post('cnfpass')));
        $this->db->where('id', $userid);
        $this->db->update('admin_master');
    }
}
?>