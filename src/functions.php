<?php 

function get_public_url($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function get_path($path = "/") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

function h($str) {
    return htmlspecialchars($str);
}

function u($string) {
    return urlencode($string);
}

function is_blank($var) {
    if(!isset($var) || "" === trim($var, " ") ) {
        return true;
    } 
    return false;
}

function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

function dd($data) {
    echo wrap_pre($data);
    die();
}

function set_name($name) {
    $namesplode = explode(" ", $name);
    $name_split = strtolower($namesplode[0]) . "-" . strtolower($namesplode[1]);
    return $name_split;          
}  

function db_connect(){
    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $db_name = DB_NAME;

    $db = new mysqli($host, $username, $password, $db_name);
    if($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db -> connect_error;
        exit();
    };
    return $db;
};

?>

