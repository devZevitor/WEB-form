<?php

    include "../functions/listUsers.php";
    include "../functions/deleteUser.php";
    include "../functions/updateUser.php";
    $users = listUsers(15);

    $editingId = null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['edit_btn'])) {
            $editingId = $_POST['edit_btn'];
        }

        if(isset($_POST['cancel_btn'])) {
            $editingId = null;

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        if(isset($_POST['update_btn'])) {
            $id = $_POST['update_btn'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            updateUser($id, $nome, $email);

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        if(isset($_POST['delete_btn'])) {
            $id = $_POST['delete_btn'];
            deleteUser($id);

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
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
                   <?php if($editingId === $user['id']): ?>
                          <form method="POST" class="form-inline">
                            <input type="text" name="nome" value="<?php echo $user['nome']; ?>">
                            <input type="email" name="email" value="<?php echo $user['email']; ?>">
                        
                            <div>
                                <button class="btnFirst" style="background-color: green;" type="submit" name="cancel_btn">
                                Cancelar
                            </button>
                            <button class="btnFirst" style="background-color: green;" type="submit" name="update_btn"
                                value="<?php echo $user['id']; ?>">
                                    Salvar
                                </button>
                            </div>
                        </form>

                    <?php else:?>
                        <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
                        <p><strong>Nome:</strong> <?php echo $user['nome']; ?></p>
                        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                        <section class="btnCRUD">
                            <form method="POST">
                                <input type="hidden" name="edit_btn" value="<?php echo $user['id']; ?>">
                                <button class="btnFirst" type="submit" style="background-color: green;">Editar</button>
                            </form>
                            <form method="POST">
                                <input type="hidden" name="delete_btn" value="<?php echo $user['id']; ?>">
                                <button class="btnFirst" type="submit" style="background-color: red;">Excluir</button>
                            </form>
                        </section>
                    <?php endif; ?>
               </div>
           <?php endforeach; ?>
        </section>
    </main>
</body>

</html>