<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main class="container">
        <h1>Cadastro de Clientes</h1>

        <form action="../functions/createUser.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <div class="form-row">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="text" id="senha" name="senha" required>
                </div>
            </div>
           
            <div class="buttons">
                <a href="../pages/dashboard.php">Voltar</a>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </main>
</body>

</html>