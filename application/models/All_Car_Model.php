<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class All_Car_Model extends CI_Model {
        
        // Call constructor
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
    
        // Function to select all data from the table
        public function getData(){
            $query = $this->db->get('car_data');
            // Return the result
            return $query->result();
        }
    }

?>