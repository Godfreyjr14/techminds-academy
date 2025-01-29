<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once(dirname(__FILE__) ."/calculator.php");
        $calculator = new Calculator();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        echo "Addition: ". $calculator -> add($num1, $num2) . "<br>";
        }
    ?>  
    <form action="" method="POST">
        First number: <input type="number" name="num1"><br>
        Second number: <input type="number" name="num2"><br>
        Operation:
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="percentage">Percentage</option>
        </select>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>