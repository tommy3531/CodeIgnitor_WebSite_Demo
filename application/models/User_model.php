<?php



class User_model extends CI_Model
{


    public function create_user()
    {
        $data = array(

            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'first_name' => $this->input->post('first_name'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email')

        );

        $insert_data = $this->db->insert('Users', $data);
        return $insert_data;
    }

    public function login_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('Users');

        if($result->num_rows() == 1)
        {
            return $result->row(0)->id;
        }
        else
        {
            return false;
        }

    }
}










?>