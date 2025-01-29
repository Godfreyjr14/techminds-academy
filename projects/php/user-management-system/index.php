<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
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
        include 'connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $sql2 = 
                $sql = "INSERT INTO users (name, email) VALUE ('$name', '$email')";

                if ($conn->query($sql) === TRUE) {
                echo "<p>New user added Successfully!</p>";
                } else {
                echo "<p>Error: " . $sql . "<br></p>" . $conn->error;
            }
        } else {
            echo "The email address '$email' is not valid.";
        }
    }
    ?>
    <div class="container">
        <form action="" method="POST">
        <label for="">User Management System</label><br>
        <label for="">Enter Name</label>
        <input type="text" name="name" required><br>
        <label for="">Enter Email</label>
        <input type="email" name="email" required><br>
        <input type="submit" value="Add User">
        </form>
    </div>
</body>
</html>