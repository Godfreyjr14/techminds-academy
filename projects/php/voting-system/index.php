<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $nationality = $_POST['nationality'];
            if ($age >= 18) {
                if ($nationality == "NIGERIA");
                echo "You are eligible to vote!";
            } else {
                echo "You are not eligible to vote!, not a Citizen";
            }
    }
    ?>
    <form action="" method="POST">
        <label>Enter Your Name</label>
            <input type="text" name="name"required>
        <label>Enter Your Age</label>
            <input type="number" name="age" required>
        <select name="nationality" required >
            <option value="">Select Country</option>
            <option value="">NIGERIA</option>
            <option value="">USA</option>
            <option value="">GHANA</option>
            <option value="">ENGLAND</option>
        </select>
        <button type="submit">Check Eligibility</button>
    </form>
</body>
</html>