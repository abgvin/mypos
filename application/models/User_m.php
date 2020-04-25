<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post)
    {
        // Tanpa query builder
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));

        return $query  = $this->db->get();
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('user_id', $id);
        }
        return $query  = $this->db->get();
    }

    public function add($post)
    {

        // nama field DB            name inputan
        $params['name']         = $post['fullname'];
        $params['username']     = $post['username'];
        $params['password']     = sha1($post['password']);
        $params['address']      = $post['address'] != "" ? $post['address'] : null;
        $params['level']        = $post['level'];

        $this->db->insert('user', $params);
    }

    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    public function edit($post)
    {
        $params['name']         = $post['fullname'];
        $params['username']     = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['address']      = $post['address'] != "" ? $post['address'] : null;
        $params['level']        = $post['level'];
        $params['user_id']      = $post['user_id'];

        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

}