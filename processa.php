<?php
$nome = $_POST['nome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$rg = $_POST['rg'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$bairro = $_POST['bairro'] ?? '';
$cep = $_POST['cep'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$celular = $_POST['celular'] ?? '';
$email = $_POST['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados Cadastrados</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f0f0f0; }
        h1 { color: #333; text-align: center; }
        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        p { margin: 10px 0; font-size: 1rem; }
        strong { color: #222; }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dados do Cliente</h1>
        <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>CPF:</strong> <?= htmlspecialchars($cpf) ?></p>
        <p><strong>RG:</strong> <?= htmlspecialchars($rg) ?></p>
        <p><strong>Endereço:</strong> <?= htmlspecialchars($endereco) ?></p>
        <p><strong>Bairro:</strong> <?= htmlspecialchars($bairro) ?></p>
        <p><strong>CEP:</strong> <?= htmlspecialchars($cep) ?></p>
        <p><strong>Cidade:</strong> <?= htmlspecialchars($cidade) ?></p>
        <p><strong>Estado:</strong> <?= htmlspecialchars($estado) ?></p>
        <p><strong>Login:</strong> <?= htmlspecialchars($login) ?></p>
        <p><strong>Senha:</strong> <?= htmlspecialchars($senha) ?></p>
        <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
        <p><strong>Celular:</strong> <?= htmlspecialchars($celular) ?></p>
        <p><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></p>

        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
