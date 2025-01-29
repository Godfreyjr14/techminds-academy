<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input To File</title>
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $content = $_POST['content'];
            $extension =  $_POST['extension'];
            $filename = $_POST['filename']. $extension;
            
            

            //write to a file
            file_put_contents($filename, $content);

            //Read from the file and display contents
            echo "<h3>Contents of the file:</h3>";
            echo nl2br(file_get_contents($filename));
        }; 
    ?>
    <div class="container">
        <form action="" method="POST">
            Enter Some Text: <textarea name="content"></textarea><br>
            <label for="">Enter Filename</label>
            <input type="text" name="filename">
                <select name="extension" id="">
                    <option value=".js">js</option>
                    <option value=".php">php</option>
                    <option value=".txt">txt</option>
                    <option value=".css">css</option>
                </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>