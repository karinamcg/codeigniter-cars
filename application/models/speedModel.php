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
        
        /*
        public function getData($speed){
            $this->db->select('*');
            $this->db->from('car_data');
            $this->db->where('speed >', $speed);
            $query = $this->db->get();
            return $query->result();
        }*/
        
        // Function to select all the cars when a top speed is greater than the specified user speed
        public function getData($speed){
            // Select all from table where speed is greater than user's input
            $this->db->select('*')->from('car_data')->where('speed >', $speed);
            $query = $this->db->get();
            // Return the result
            return $query->result();
        }
    }

?>