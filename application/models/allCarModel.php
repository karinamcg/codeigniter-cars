<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class allCarModel extends CI_Model {
    
        // Function to select all data from the table
        public function getData(){
            $query = $this->db->get('car_data');
            // Return the result
            return $query->result();
        }
    }

?>