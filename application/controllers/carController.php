<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class carController extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            $this->load->model('allCarModel');
            $allCars['data'] = $this->allCarModel->getData();
            $this->load->view('allCarView', $allCars);
        }
        
        public function speed($speed){
            $this->load->model('speedModel');
            $speedCars['data'] = $this->speedModel->getData($speed);
            $this->load->view('speedView', $speedCars);
        }
    }

?>