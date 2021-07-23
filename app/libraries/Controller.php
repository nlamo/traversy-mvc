<?php 
    /* Base controller
     * Loads the models and views
     */

     class Controller {

         // Load model (returns a new model)
         public function model($model) {

            require_once '../app/models/' . $model . '.php';

            return new $model();
        }
        
        // Load view ($data array is for passing data into the view)
        public function view($view, $data = []) {
            
            // Check for view file
            if (file_exists('../app/views/' . $view . '.php')) {

                require_once '../app/views/' . $view . '.php';
            }
            else {
                
                die('View does not exist.');
            }
        }

    }

?>