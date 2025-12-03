<?php

include "../functions/listUsers.php";

$users = listUsers(15);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main class="dashboard">
        <section class="bar">
            <h2>Listagem de usuarios</h2>
           <div class="groupBtn">
                <button class="btnFirst">
                    <a href="../pages/createUserPage.php">
                        Criar Usuario
                    </a>
                </button>
                <button class="btnFirst" style="background-color: gray;">
                    <a href="../index.php">
                        Logout
                    </a>
                </button>
           </div>
        </section>
        <section class="usersList">
           <?php foreach ($users as $user): ?>
               <div class="userCard">
                    <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
                    <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                    <section class="btnCRUD">
                        <button class="btnFirst" style="background-color: green;">Editar</button>
                        <button class="btnFirst" style="background-color: red;">Excluir</button>
                    </section>
               </div>
           <?php endforeach; ?>
        </section>
    </main>
</body>

</html>