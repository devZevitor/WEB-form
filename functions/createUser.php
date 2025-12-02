<?php
    include  __DIR__ . "/connection.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    createUser($nome, $email, $senha);

    function createUser($nome, $email, $senha)
    {
        global $conn;
        $sql = "INSERT INTO users (nome, email, senha) VALUES('$nome', '$email', '$senha')";

        try {
            if ($conn->query($sql) === TRUE) {
                header("Location: ../index.php");
                exit;
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getcode() == 1062) {
                header("Location: index.php");
                exit;
            }
            error_log('Dados não foram inseridos: ' . $e->getMessage());
        }
    }
?>
