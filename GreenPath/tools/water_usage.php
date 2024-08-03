<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Usage Calculator - GreenPath</title>
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

        .water-calculator-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .water-calculator-container h1 {
            text-align: center;
            color: rgb(0,109,82); /* Green theme */
        }

        .water-calculator-container form {
            display: flex;
            flex-direction: column;
        }

        .water-calculator-container label {
            margin-top: 10px;
        }

        .water-calculator-container input[type="number"] {
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .water-calculator-container input[type="submit"] {
            padding: 10px;
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .water-calculator-container input[type="submit"]:hover {
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
        <div class="water-calculator-container">
            <h1>Water Usage Calculator</h1>
            <form method="post" action="">
                <label for="showers">Showers (minutes per day):</label>
                <input type="number" id="showers" name="showers" required>

                <label for="toilets">Toilet Flushes (per day):</label>
                <input type="number" id="toilets" name="toilets" required>

                <label for="laundry">Laundry Loads (per week):</label>
                <input type="number" id="laundry" name="laundry" required>

                <label for="dishes">Dishwashing (loads per day):</label>
                <input type="number" id="dishes" name="dishes" required>

                <input type="submit" value="Calculate Water Usage">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $showers = $_POST['showers'];
                $toilets = $_POST['toilets'];
                $laundry = $_POST['laundry'];
                $dishes = $_POST['dishes'];

                $shower_usage = 9; 
                $toilet_usage = 6;
                $laundry_usage = 100; 
                $dishwasher_usage = 15; 

                
                $shower_water = $showers * $shower_usage * 365; 
                $toilet_water = $toilets * $toilet_usage * 365; 
                $laundry_water = $laundry * $laundry_usage * 52; 
                $dishes_water = $dishes * $dishwasher_usage * 365; 

                $total_water = $shower_water + $toilet_water + $laundry_water + $dishes_water;

                echo "<div class='results'>";
                echo "<h2>Calculated Water Usage:</h2>";
                echo "<p>Total Water Usage: " . number_format($total_water, 2) . " liters per year</p>";
                echo "<p>Breakdown:</p>";
                echo "<ul>";
                echo "<li>Showers: " . number_format($shower_water, 2) . " liters</li>";
                echo "<li>Toilets: " . number_format($toilet_water, 2) . " liters</li>";
                echo "<li>Laundry: " . number_format($laundry_water, 2) . " liters</li>";
                echo "<li>Dishwashing: " . number_format($dishes_water, 2) . " liters</li>";
                echo "</ul>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
