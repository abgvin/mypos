<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
    }
    
    public function index()
	{
        $data['row'] = $this->user_m->get();
        
        // load view user_data.php
        $this->template->load('template', 'user/user_data', $data);
    }
    
    public function add()
    {
    
        # RULES VALIDASI FORM INPUTAN
        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]',
            array(
                'min_length' => 'Username must be at least 5 characters',
                'is_unique'  => 'Username has been used, try another'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirm', 'required|min_length[5]|matches[password]', 
            array('matches' => 'Password confirmation doesn\'t match Password ')
        );
        $this->form_validation->set_rules('level'   , 'Level', 'required');

        // PERIKSA STATYS VALIDASI, APAKAH SUDAH OKE SEMUANYA ATAU BELUM
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else { // JIKA VALIDASI OKE JALANKAN SCRIPT BERIKUT
           $post = $this->input->post(null, TRUE);
           $this->user_m->add($post);

           if ($this->db->affected_rows() > 0) {
               echo "
               <script>
                alert('Data berhasil di simpan');
                window.location='". site_url('user') ."';
               </script>
               ";
           }
        }

    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "
            <script>
             window.location='". site_url('user') ."';
            </script>
            ";
        }
    }

    public function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
           $this->form_validation->set_message('username_check', 'Username has been used, try another');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function edit($id)
    {
    
        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check',
                array(
                    'min_length' => 'Username must be at least 5 characters',
                ));
        // jika password diganti !
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirm', 'matches[password]', 
                array('matches' => 'Password confirmation doesn\'t match Password ')
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Password Confirm', 'matches[password]', 
                array('matches' => 'Password confirmation doesn\'t match')
            );
        }
        
        $this->form_validation->set_rules('level'   , 'Level', 'required');

        // jika validasi gagal (ada data yang tidak benar)
        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
           if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
           } else {
            echo "
            <script>
             alert('Data tidak ditemukan');
             window.location='". site_url('user') ."';
            </script>
            ";
           }
        } else { 
           $post = $this->input->post(null, TRUE);
           $this->user_m->edit($post);

           if ($this->db->affected_rows() > 0) {
               echo "
               <script>
                alert('Data berhasil di simpan');
               </script>
               ";
           }
           echo "<script> window.location='". site_url('user') ."';</script>";
        }

    }

   
}
