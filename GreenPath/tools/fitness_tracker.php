<?php
include 'nav.php';

if (!isset($_SESSION['user_id'])) {
   
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Fitness Tracker - GreenPath</title>
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
                text-align: center;
            }
            .message {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <?php include 'nav.php'; ?>
        <main>
            <div class='message'>
                <h1>Access Restricted</h1>
                <p>You need to be logged in to access the Fitness Tracker. Please <a href='../login.php'>login</a> or <a href='../signup.php'>create an account</a>.</p>
            </div>
        </main>
        <?php include 'footer.php'; ?>
    </body>
    </html>";
    exit();
}

// Continue with the rest of the page if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tracker - GreenPath</title>
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

        .tracker-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .tracker-container h1 {
            text-align: center;
            color: rgb(0,109,82); /* Green theme */
        }

        .tracker-container form {
            display: flex;
            flex-direction: column;
        }

        .tracker-container label {
            margin-top: 10px;
        }

        .tracker-container input[type="date"],
        .tracker-container input[type="text"],
        .tracker-container input[type="number"] {
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .tracker-container input[type="submit"] {
            padding: 10px;
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .tracker-container input[type="submit"]:hover {
            background-color: #388E3C; /* Darker green */
        }

        .tracker-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tracker-container table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .tracker-container th {
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
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

    <main>
        <div class="tracker-container">
            <h1>Fitness Tracker</h1>
            <form method="post" action="fitness_tracker.php">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="exercise">Exercise:</label>
                <input type="text" id="exercise" name="exercise" required>

                <label for="duration">Duration (minutes):</label>
                <input type="number" id="duration" name="duration" required>

                <label for="calories">Calories Burned:</label>
                <input type="number" id="calories" name="calories" required>

                <input type="submit" value="Add Entry">
            </form>

            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "greenpath";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $date = $_POST['date'];
                $exercise = $_POST['exercise'];
                $duration = $_POST['duration'];
                $calories = $_POST['calories'];

                $user_id = $_SESSION['user_id']; // Get the logged-in user's ID

                $sql = "INSERT INTO fitness_tracker (user_id, date, exercise, duration, calories) VALUES ('$user_id', '$date', '$exercise', '$duration', '$calories')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Entry added successfully!</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            }
            ?>

            <h2>Previous Entries</h2>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Exercise</th>
                    <th>Duration (minutes)</th>
                    <th>Calories Burned</th>
                </tr>
                <?php
                $user_id = $_SESSION['user_id']; // Get the logged-in user's ID
                $sql = "SELECT date, exercise, duration, calories FROM fitness_tracker WHERE user_id = '$user_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['date']}</td>
                                <td>{$row['exercise']}</td>
                                <td>{$row['duration']}</td>
                                <td>{$row['calories']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No entries found</td></tr>";
                }

                $conn->close();
                ?>
            </table>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
