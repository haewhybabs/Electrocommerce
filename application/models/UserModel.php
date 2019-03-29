<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public $table = 'tbl_user';

    public $id = 'id';

    public function CheckUsers($email, $password)
    {
        // $this->db->where('email', $email);

        // $query = $this->db->get($this->table)->row();
        // //return $query;

        // if (password_verify($password, $query->password)) {
        //     return $query;
        // } else {
        //     return false;
        // }

        return $this->db->where(['email' => $email, 'password' => $password])
            ->get($this->table)->row();
    }


    public function insert_user($data, $pass)
    {
        $insert = array(
            'firstName' => $data['first_name'],
            'lastName' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $pass,
            'confirmPassword' => $confirmpass
        );

        return $this->db->insert($table, $insert);
    }

    public function UserCheck($email, $password)
    {
        $this->db->where('email', $email);

        $query = $this->db->get($this->table)->row();

        if ($query == true) {
            if (password_verify($password, $query->password)) {
                return $query;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function insert_new_user($data)
    {
        $this->db->insert('tbl_user', $data);
    }
}