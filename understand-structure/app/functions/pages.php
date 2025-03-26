<?php

function load(){
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : '';

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if(!file_exists($page)){
        throw new \Exception("not exists");
    }

    return $page;
}