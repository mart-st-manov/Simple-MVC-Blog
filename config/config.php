<?php

$title = "My Blog";
$page = null;

function __autoload($className) {
    if(is_file('./Controller/' . $className . '.php')) {
        require('./Controller/' . $className . '.php');
    } else if(is_file('./Model/' . $className . '.php')) {
        require('./Model/' . $className . '.php');
    } else if(is_file('./config/' . $className . '.php')) {
        require_once('./config/' . $className . '.php');
    }
}

if(isset($_GET['action'])) {
    $page = $_GET['action'];
}

?>