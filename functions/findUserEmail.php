<?php 
    include __DIR__ . "/connection.php";

    function findUserEmail($email){
        global $conn;
        $sql = "SELECT * FROM users WHERE email = ?";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            return $stmt->get_result();
        } catch (mysqli_sql_exception $e){
            echo "<prev>";
            echo "Error sql:\n";
            var_dump($e->getMessage());
            echo "<prev>";
        }
    }
?>