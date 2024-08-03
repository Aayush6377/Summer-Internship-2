<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Consumption Tracker - GreenPath</title>
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

        .energy-tracker-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .energy-tracker-container h1 {
            text-align: center;
            color: rgb(0,109,82); /* Green theme */
        }

        .energy-tracker-container form {
            display: flex;
            flex-direction: column;
        }

        .energy-tracker-container label {
            margin-top: 10px;
        }

        .energy-tracker-container input[type="number"] {
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .energy-tracker-container input[type="submit"] {
            padding: 10px;
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .energy-tracker-container input[type="submit"]:hover {
            background-color: #388E3C; /* Darker green */
        }

        .results {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .results h2 {
            margin-top: 0;
            color: rgb(0,109,82); /* Green theme */
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>

    <main>
        <div class="energy-tracker-container">
            <h1>Energy Consumption Tracker</h1>
            <form method="post" action="">
                <label for="lightbulbs">Lightbulbs (hours per day):</label>
                <input type="number" id="lightbulbs" name="lightbulbs" required>

                <label for="tv">Television (hours per day):</label>
                <input type="number" id="tv" name="tv" required>

                <label for="fridge">Refrigerator (hours per day):</label>
                <input type="number" id="fridge" name="fridge" required>

                <label for="ac">Air Conditioner (hours per day):</label>
                <input type="number" id="ac" name="ac" required>

                <label for="washing_machine">Washing Machine (loads per week):</label>
                <input type="number" id="washing_machine" name="washing_machine" required>

                <input type="submit" value="Calculate Energy Usage">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $lightbulbs = $_POST['lightbulbs'];
                $tv = $_POST['tv'];
                $fridge = $_POST['fridge'];
                $ac = $_POST['ac'];
                $washing_machine = $_POST['washing_machine'];

                $lightbulb_usage = 0.06; 
                $tv_usage = 0.1; 
                $fridge_usage = 1.2; 
                $ac_usage = 2.0; 
                $washing_machine_usage = 1.5; 

                $lightbulb_energy = $lightbulbs * $lightbulb_usage * 365; 
                $tv_energy = $tv * $tv_usage * 365; 
                $fridge_energy = $fridge * 365; 
                $ac_energy = $ac * $ac_usage * 365; 
                $washing_machine_energy = $washing_machine * $washing_machine_usage * 52; 

                $total_energy = $lightbulb_energy + $tv_energy + $fridge_energy + $ac_energy + $washing_machine_energy;

                echo "<div class='results'>";
                echo "<h2>Calculated Energy Usage:</h2>";
                echo "<p>Total Energy Usage: " . number_format($total_energy, 2) . " kWh per year</p>";
                echo "<p>Breakdown:</p>";
                echo "<ul>";
                echo "<li>Lightbulbs: " . number_format($lightbulb_energy, 2) . " kWh</li>";
                echo "<li>Television: " . number_format($tv_energy, 2) . " kWh</li>";
                echo "<li>Refrigerator: " . number_format($fridge_energy, 2) . " kWh</li>";
                echo "<li>Air Conditioner: " . number_format($ac_energy, 2) . " kWh</li>";
                echo "<li>Washing Machine: " . number_format($washing_machine_energy, 2) . " kWh</li>";
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
