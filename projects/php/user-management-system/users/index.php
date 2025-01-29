<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=</, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        form {
            display: flex;
            flex-direction: column;
            width: 400px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: start;

        }
        button, input {
            margin-block: 5px;
        }    
</style>
    <?php
        include "connect.php";
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</body>
</html>