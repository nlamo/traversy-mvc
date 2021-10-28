<?php
    class Pages extends Controller {

        public function __construct() {
 
        }

        // If the first param of view is not a file in 'app/views', it'll die and print message

        public function index() {

            // Associative array containing data for 2nd param of view
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function about() {

            $data = [
                'title' => 'About Us'
            ];

            $this->view('pages/about', $data);
        }
    }

?>