<?php
include __DIR__ . "/connection.php";

    function updateUser($id, $nome, $email)
    {
        global $conn;

        $sql = "UPDATE users SET nome=?, email=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nome, $email, $id);
        $stmt->execute();
    }
?>