<?php

    //define('WWW_ROOT', 'https://forward.marlowecheng.com');
    define('WWW_ROOT', 'http://localhost');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    //Functions
    require('functions.php');


    //Classes
    require('Classes/Mentor.php');
    require('data/mentor.php');
    require('Classes/Mentee.php');
    require('data/mentee.php');
    require('Classes/Project.php');
    require('data/project.php');

?>