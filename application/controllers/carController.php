<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php

    class carController extends CI_Controller {
        
        public function index(){
            $this->load->model('allCarModel');
            $allCars['data'] = $this->allCarModel->getData();
            $this->load->view('allCarView', $allCars);
        }
        
        public function over200(){
            $this->load->model('over200Model');
            $over200Cars['data'] = $this->over200Model->getData();
            $this->load->view('over200View', $over200Cars);
        }
    }

?>