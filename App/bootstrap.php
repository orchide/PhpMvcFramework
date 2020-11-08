<?php

//Load config
require_once 'config/config.php';


// Autoload core libraries
spl_autoload_register(function ($className){
    require_once 'Libraries/' . $className . '.php';
});