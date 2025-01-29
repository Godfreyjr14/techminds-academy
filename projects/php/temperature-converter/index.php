<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
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
        function convertTemperature($temp, $from, $to) {
            if ($from == "celcius" && $to == "fahrenheit") {
                return ($temp *9/5) + 32;
            } elseif ($from == "fahrenheit" && $to == "celcius") {
                return ($temp - 32) * 5/9;
            }
            return $temp; // No conversion needed if same unit
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST['temperature'];
            $unit_from = $_POST['unit_from'];
            $unit_to = $_POST['unit_to'];

            $converted_temp = convertTemperature($temperature, $unit_from, $unit_to);
            echo "Converted temperature: " . $converted_temp;
        }
    ?>
    <div class="container">
        <form action="" method="POST">
            <label>Temperature Converter</label><br>
            Enter Temperature: <input type="number" name="temperature"><br>
            Convert from:   
            <select name="unit_from">
                <option value="celcius">Celcius</option> 
                <option value="fahrenheit">Fahrenheit</option>
            </select><br>
            Convert to:
            <select name="unit_to">
                <option value="celcius">Celcius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="fahrenheit">Fahrenheit</option>
        </select><br>
        <input type="submit" value="Convert">
    </form>
</div>
</body>
</html>