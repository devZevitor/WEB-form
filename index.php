<?php
    session_start();
    include __DIR__ . "/functions/findUserEmail.php";

    if(isset($_SESSION["user_id"])){
        header("Location: ./pages/dashboard.php");
        exit;
    }
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST["email"] ?? "";
        $password = $_POST["senha"] ?? "";

        $result = findUserEmail($email);
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user["senha"])){
                $_SESSION["user_id"] = $user["id"];
                header("Location: ./pages/dashboard.php");
                exit;
            } else {
                echo "<script>alert('Senha incorreta. Tente novamente.');</script>";
            }
        } else {
            echo "<script>alert('Email não encontrado. Tente novamente.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="login">
        <section class="loginForm">
            <h2>Login</h2>
            <form method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button name="login-btn" type="submit" class="btnFirst">
                    Entrar
                </button>
                <a href="./pages/createUserPage.php" style="text-align: center; font-size: 13px;">Ainda não tem conta?</a>
            </form>
        </section>
    </main>
</body>

</html>