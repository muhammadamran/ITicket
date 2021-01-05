<?php
class Home_model extends CI_Model{

	public function member(){
        return $this->db->query("SELECT COUNT(*) as member FROM tbl_users WHERE role='Member'")->result();
    }

    public function produk(){
        return $this->db->query("SELECT COUNT(*) as produk FROM tbl_produk")->result();
    }
}
