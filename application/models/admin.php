<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Model
{
    public function getAlluser()
    {
        return $this->db->get('user')->result_array();
    }
}
