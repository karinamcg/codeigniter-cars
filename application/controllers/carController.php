<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class carController extends CI_Controller {
        
        public function index(){
            $this->load->model('carModel');
            $data['records'] = $this->carModel->getData();
            $this->load->view('carView', $data);
        }
    }

?>