<?php
    // Load Config
    require_once 'config/config.php';
    //Load helpers
    require_once 'helpers/url_helper.php';
    //Load session
    require_once 'helpers/session_helper.php';

    // Autolood Core Libraries
    spl_autoload_register(function ($className){
        require_once 'libraries/' . $className . '.php';
    });