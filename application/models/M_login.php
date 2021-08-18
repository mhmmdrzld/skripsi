<?php

class M_login extends CI_Model
{

    public function proses_login($username, $password)
    {
        $query = $this->db->query("SELECT * from users_new where USERNAME='$username' and PASSWORD='$password'");
        return $query;
    }

}
