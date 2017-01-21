<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Model {

  	public function __construct() {
        parent::__construct();
    }
    
    public function countPerMonth(){
        $sql = 'SELECT DATE_FORMAT(date_added, "%m-%Y") AS month, COUNT(*) AS total FROM users GROUP BY DATE_FORMAT(date_added, "%m-%Y")';
        $result = $this->db->query($sql);
        return $result->result(); 
    }

    public function countPerYear(){
        $sql = 'SELECT DATE_FORMAT(date_added, "%Y") AS year, COUNT(*) AS total FROM users GROUP BY DATE_FORMAT(date_added, "%Y")';
        $result = $this->db->query($sql);
        return $result->result(); 
    }
    
    
}
