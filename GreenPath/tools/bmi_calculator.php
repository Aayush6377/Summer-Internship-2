<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator - GreenPath</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header, footer {
    background-color: rgb(0,109,82); /* Green theme */
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header .logo, footer .logo {
    font-size: 24px;
    font-weight: bold;
}

header .logo img, footer .logo img {
    height: 40px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    background-color: rgb(0,109,82); /* Green background for nav */
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #fff; /* White text */
    padding: 10px;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #c8e6c9; /* Light green on hover */
}

main {
    flex: 1;
    padding: 20px;
}

.calculator-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

.calculator-container h1 {
    text-align: center;
    color: rgb(0,109,82); /* Green theme */
}

.calculator-container form {
    display: flex;
    flex-direction: column;
}

.calculator-container label {
    margin-top: 10px;
}

.calculator-container input[type="number"] {
    padding: 10px;
    font-size: 16px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

.calculator-container input[type="submit"] {
    padding: 10px;
    background-color: rgb(0,109,82); /* Green theme */
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
}

.calculator-container input[type="submit"]:hover {
    background-color: #388E3C; /* Darker green */
}

.calculator-container p {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
}

footer {
    background-color: rgb(0,109,82); /* Green theme */
    color: #fff;
    padding: 10px;
    text-align: center; /* Center content horizontally */
    position: relative;
    bottom: 0;
    width: 100%;
}

footer nav {
    display: flex;
    justify-content: center; /* Center the nav content horizontally */
}

footer nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex; /* Flexbox for horizontal alignment */
}

footer nav ul li {
    margin: 0 10px; /* Adjust margin for spacing */
}

footer nav ul li a {
    text-decoration: none;
    color: #fff; /* White text */
    padding: 10px;
    transition: color 0.3s;
}

footer nav ul li a:hover {
    color: #c8e6c9; /* Light green on hover */
}

    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
        <div class="calculator-container">
            <h1>BMI Calculator</h1>
            <form method="post" action="bmi_calculator.php">
                <label for="height">Height (cm):</label>
                <input type="number" id="height" name="height" required>

                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" required>

                <input type="submit" value="Calculate BMI">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $height = $_POST['height'] / 100; // convert height to meters
                $weight = $_POST['weight'];
                $bmi = $weight / ($height * $height);
                $bmi = round($bmi, 2);
                echo "<p>Your BMI is: $bmi</p>";

                if ($bmi < 18.5) {
                    echo "<p>Status: Underweight</p>";
                } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                    echo "<p>Status: Normal weight</p>";
                } elseif ($bmi >= 25 && $bmi < 29.9) {
                    echo "<p>Status: Overweight</p>";
                } else {
                    echo "<p>Status: Obesity</p>";
                }
            }
            ?>
        </div>
    </main>
    <?php include "footer.php";?>
</body>
</html>
