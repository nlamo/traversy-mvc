<?php
    // Load config
    require_once 'config/config.php';

    // Load libraries
    // require_once 'libraries/core.php';
    // require_once 'libraries/controller.php';
    // require_once 'libraries/database.php';
    
    // Note: this below is a cleaner, fastern, more reusable way of loading the libraries,
    //       otherwise it would eventually become a long list of require statements.

    // Autoload core libraries
    spl_autoload_register(function($className) {

        require_once 'libraries/' . $className . '.php';
    });
?>