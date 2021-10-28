<?php
    // DB params (NOTE: values 'defined' here are just placeholders)
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'password');
    define('DB_NAME', 'db_name');
    
    // dirname() gives the parent of the file being passed
    // define() is making it a constant

    // App root
    define('APPROOT', dirname(dirname(__FILE__)));

    // URL root
    define('URLROOT', 'http://localhost/traversy-mvc');

    // Site name
    define('SITENAME', 'TraversyMVC');

?>