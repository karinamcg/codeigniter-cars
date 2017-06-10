<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class speedModel extends CI_Model {
        
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
    
        /*public function getData(){
            $query = $this->db->query('SELECT * FROM `car_data` WHERE `speed` > 200');
            return $query->result();
        }*/
        
        /*
        public function getData($speed){
            $query = "SELECT * FROM `car_data` WHERE `speed` > $speed ";
            return $this->db->query($query)->row();
        }*/
        
        public function getData($speed){
            $this->db->select('*');
            $this->db->from('car_data');
            $this->db->where('speed >', $speed);
            $query = $this->db->get();
            return $query->result();
        }
    }

?>