<?php
   
    // dirname() gives the parent of the file being passed
    // define() is making it a constant

    // App root
    define('APPROOT', dirname(dirname(__FILE__)));

    // URL root
    define('URLROOT', 'http://localhost/traversymvc');

    // Site name
    define('SITENAME', 'TraversyMVC');

?>