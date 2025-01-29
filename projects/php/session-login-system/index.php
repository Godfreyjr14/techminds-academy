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
            $username = $_POST['username'];
           $_SESSION['username'] = $username;
           //

           echo "WELCOME " . $_SESSION['username'] . "!";
        }
    ?>
    <div class="container">
        <form action="" method="POST">
        <label for="">Session Login System</label><br>
        Enter Your Username:<input type="text" name="username" placeholder="Username" required>
        <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>