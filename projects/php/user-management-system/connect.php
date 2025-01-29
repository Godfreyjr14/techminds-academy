<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php_users";

        //create Connectiom
        $conn = new mysqli($servername,$username,$password,$dbname);

        //check Connection
        if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
        } else {
            echo "Database👾";
        }
?>