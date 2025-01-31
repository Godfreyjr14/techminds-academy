<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Secure</title>
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
        include "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Using prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "Login Successful!";
        }   else {
            echo "invalid username or password.";
        }

        $stmt->close();
    }

?>
<div class="container">
    <form action="" method="POST">
        <label for="">LOGIN SECURE</label>
        <label for="">Enter Username</label>
            <input type="text" name="username" placeholder="Enter Username">
        <label for="">Enter Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>


