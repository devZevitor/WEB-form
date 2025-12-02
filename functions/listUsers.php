<?php 
    include __DIR__ . "/connection.php";

    $limite = $_GET['limite'] ?? 15;
    listUsers($limite);
    $users = [];
    
    function listUsers($limite){
        global $conn;
        $sql = "SELECT * FROM users LIMIT $limite";
        $result = $conn->query($sql);

        if($result->num_rows <= 0){
            error_log("Erro ao listar usuários: Nenhum usuário encontrado.");
            return [];
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
?>