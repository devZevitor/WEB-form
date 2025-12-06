<?php 
    $root = "root";
    $password = getenv("DOCKER_ENV") ? "root" : "";
    $host = getenv("DOCKER_ENV") ? "mysql" : "localhost";
    $bdName = "webform_db";   

    $conn = new mysqli($host, $root, $password, $bdName);

    if($conn->connect_error) {
        die("A conexão falhou:" . $conn->connect_error);
    }

    // echo "Conexão bem-sucedida!";
?>