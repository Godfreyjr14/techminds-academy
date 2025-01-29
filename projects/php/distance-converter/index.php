<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Converter</title>
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $distance = $_POST['distance'];
            $unit_from = $_POST['unit_from'];
            $unit_to = $_POST['unit_to'];

            function convertDistance($distance, $from, $to) {
                $conversion_rates = [
                    "ft_to_m" => 0.3048,
                    "m_to_km" => 0.001,
                    "km_to_ft" => 3280.84,
                    "km_to_m" => 1000,
                    "m_to_ft" => 3.28084,
                    "ft_to_km" => 0.0003048,
                ];
                if ($from === $to)   
                return "";
            }
            $convertedUnit = convertDistance($distance, $unit_from, $unit_to);
            echo "Converted distance: " . $convertedUnit;
            }
    ?>
    <div class="container">
        <form action="" method="POST">
            <label>Distance Converter</label><br>
            Enter Unit: <input type="number" name="distance"><br>
            From:   
            <select name="unit_from">
                <option value="ft">FT</option> 
                <option value="m">M</option>
                <option value="km">KM</option>
            </select><br>
            To:
            <select name="unit_to">
                <option value="m">M</option>
                <option value="km">KM</option>
                <option value="ft">FT</option>
        <input type="submit" value="Convert">
        </form>
    </div>
</body>
</html>