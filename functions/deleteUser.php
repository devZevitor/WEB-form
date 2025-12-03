<?php 
    include __DIR__ . "/connection.php";

    function deleteUser($id) {
        global $conn;

        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
?>