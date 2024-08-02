<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Footprint Calculator - GreenPath</title>
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

        .carbon-calculator-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .carbon-calculator-container h1 {
            text-align: center;
            color: rgb(0,109,82); /* Green theme */
        }

        .carbon-calculator-container form {
            display: flex;
            flex-direction: column;
        }

        .carbon-calculator-container label {
            margin-top: 10px;
        }

        .carbon-calculator-container input[type="number"] {
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .carbon-calculator-container input[type="submit"] {
            padding: 10px;
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .carbon-calculator-container input[type="submit"]:hover {
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
        <div class="carbon-calculator-container">
            <h1>Carbon Footprint Calculator</h1>
            <form method="post" action="">
                <label for="miles_traveled">Miles Traveled by Car (per year):</label>
                <input type="number" id="miles_traveled" name="miles_traveled" required>

                <label for="kwh_energy">Energy Consumption (kWh per month):</label>
                <input type="number" id="kwh_energy" name="kwh_energy" required>

                <label for="waste_generated">Waste Generated (kg per month):</label>
                <input type="number" id="waste_generated" name="waste_generated" required>

                <input type="submit" value="Calculate Footprint">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $miles_traveled = $_POST['miles_traveled'];
                $kwh_energy = $_POST['kwh_energy'];
                $waste_generated = $_POST['waste_generated'];

                // Emission factors (example values in kg CO2 per unit)
                $car_emission_factor = 0.411; // kg CO2 per mile
                $energy_emission_factor = 0.233; // kg CO2 per kWh
                $waste_emission_factor = 0.075; // kg CO2 per kg waste

                // Calculate carbon footprint
                $car_emission = $miles_traveled * $car_emission_factor;
                $energy_emission = $kwh_energy * $energy_emission_factor;
                $waste_emission = $waste_generated * $waste_emission_factor;

                $total_emission = $car_emission + $energy_emission + $waste_emission;

                echo "<div class='results'>";
                echo "<h2>Calculated Carbon Footprint:</h2>";
                echo "<p>Total Carbon Footprint: " . number_format($total_emission, 2) . " kg CO2 per year</p>";
                echo "<p>Breakdown:</p>";
                echo "<ul>";
                echo "<li>Car Travel: " . number_format($car_emission, 2) . " kg CO2</li>";
                echo "<li>Energy Consumption: " . number_format($energy_emission, 2) . " kg CO2</li>";
                echo "<li>Waste Generation: " . number_format($waste_emission, 2) . " kg CO2</li>";
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
