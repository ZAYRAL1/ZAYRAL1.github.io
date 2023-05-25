<?php
    include("conexion.php");

    try {
        // sql to create table
        $sql = "CREATE TABLE users (
            id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL,
            pass VARCHAR(30) NOT NULL,
            tipo VARCHAR(50),
            regDate DATE DEFAULT CURRENT_DATE
        )";        

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table MyGuests created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>