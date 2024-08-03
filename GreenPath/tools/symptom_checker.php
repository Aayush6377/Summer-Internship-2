<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptom Checker - GreenPath</title>
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

        .symptom-checker-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .symptom-checker-container h1 {
            text-align: center;
            color: rgb(0,109,82); /* Green theme */
        }

        .symptom-checker-container form {
            display: flex;
            flex-direction: column;
        }

        .symptom-checker-container label {
            margin-top: 10px;
        }

        .symptom-checker-container textarea {
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
            resize: vertical;
        }

        .symptom-checker-container input[type="submit"] {
            padding: 10px;
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }

        .symptom-checker-container input[type="submit"]:hover {
            background-color: #388E3C; /* Darker green */
        }

        .response-content {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .response-content p {
            margin: 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .response-content ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .response-content ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; 
          include '../gemini/response.php';
    ?>

    <main>
        <div class="symptom-checker-container">
            <h1>Symptom Checker</h1>
            <form method="post" action="">
                <label for="symptoms">Enter your symptoms:</label>
                <textarea id="symptoms" name="symptoms" rows="4" required></textarea>
                <input type="submit" value="Check Symptoms">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $symptoms = htmlspecialchars($_POST['symptoms']);
                
                // Fetch the response from the AI function
                $response = response("I have the following symptoms: $symptoms. Please predict the disease based on these symptoms.");

                if ($response === FALSE) {
                    echo "<p>Error: Unable to get response. Please try again later.</p>";
                } else {
                    // Remove Markdown bold formatting (**)
                    $response = str_replace(['**', '*'], '', $response);

                    // Convert newlines to HTML line breaks
                    $response = nl2br(htmlspecialchars($response));
                    
                    echo "<h2>Results:</h2>";
                    echo "<div class='response-content'>{$response}</div>";
                }
            }
            ?>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
