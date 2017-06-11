<!--
    * Author: Karina McGourty

    * Assignment: BScH MVC, Digital Skills Academy

    * Student ID: STU-00001261 * Date : 2017/06/12
-->
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Car_Controller extends CI_Controller {
        
        // Call constructor
        public function __construct(){
            parent::__construct();
        }
        
        /* Default function - Load model first so it can get the correct data from database, calls the function, stores the data from the database in a variable then we pass it to the view */
        public function index(){
            $this->load->model('All_Car_Model');
            $allCars['data'] = $this->All_Car_Model->getData();
            $this->load->view('All_Car_View', $allCars);
        }
        
        /* Speed function - Load model first so it can get the correct data from database, passes the speed parameter from the URI to the function, stores the data from the database in a variable and then we pass it to the view */
        public function speed($speed){
            $this->load->model('Speed_Model');
            $speedCars['data'] = $this->Speed_Model->getData($speed);
            $this->load->view('Speed_View', $speedCars);
        }
    }

?>