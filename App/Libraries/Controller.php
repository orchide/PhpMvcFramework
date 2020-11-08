<?php
 /*
 *Base COntroller
 *Loads the Models and views
 */

 class Controller {
    //  Load Model
    public function model ($model){
        // Require model file
        require_once '../app/Models/' . $model . '.php';

        // Instatiate model 
        return new $model();
    }

    // Load View 
    public function view($view, $data = []){
        // Check for the view file
        if(file_exists('../app/Views/' . $view . '.php')){
            require_once '../app/Views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }

 }