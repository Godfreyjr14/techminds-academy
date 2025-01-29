<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Session Login System</title>
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
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "The email address '$email' is valid!";
            } else {
                echo "The email address '$email' is not valid.";
            }
        }
    ?>
    <div class="container">
        <form action="" method="POST">
        <label for="">Form Validation</label><br>
        Enter Your Email:<input type="email" name="email" required>
        <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>