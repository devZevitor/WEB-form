<?php 

    $root = "root" ?? "";
    $password = "root" ?? "";
    $host = "mysql";
    $bdName = "webform_db" ?? "";   

    $conn = new mysqli($host, $root, $password, $bdName);

    if($conn->connect_error) {
        die("A conexão falhou:" . $conn->connect_error);
    }

    // echo "Conexão bem-sucedida!";
?>