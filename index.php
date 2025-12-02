<?php

include "./functions/listUsers.php";

$users = listUsers(15);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="dashboard">
        <section class="navBar">
            <a href="./pages/createUserPage.php">Criar Usuario</a>
            <a href="">Apagar Usuario</a>
            <a href="">Atualizar Usuario</a>
            <a href="">Ver Usuarios</a>
        </section>
        <section class="loginSection">
            <a href="">Fazer login</a>
        </section>
        <section class="usersList">
           <?php foreach ($users as $user): ?>
               <div class="userCard">
                    <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
                    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
               </div>
           <?php endforeach; ?>
        </section>
</mainb>
</body>

</html>