<?php
    include  __DIR__ . "/connection.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    createUser($nome, $email, $senha);

    function createUser($nome, $email, $senha)
    {
        global $conn;
        $sql = "INSERT INTO users (nome, email, senha) VALUES('$nome', '$email', '$senha')";

        try {
            if ($conn->query($sql) === TRUE) {
                header("Location: ../pages/dashboard.php");
                exit;
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getcode() == 1062) {
                header("Location: ../pages/dashboard.php");
                exit;
            }
            echo "<pre>";
            echo "ERRO SQL:\n";
            var_dump($e->getMessage());
            echo "</pre>";
            exit;
        }
    }
?>
