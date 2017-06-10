<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class over200Model extends CI_Model {
    
        public function getData(){
            $query = $this->db->query('SELECT * FROM `car_data` WHERE `speed` > 200');
            return $query->result();
        }
    }

?>