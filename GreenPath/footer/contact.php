<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GreenPath</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: white;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: rgb(0, 109, 82); /* Dark green */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, textarea {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: rgb(0, 109, 82); /* Dark green */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005b43; /* Slightly darker green */
        }

        .readonly {
            background-color: #e9ecef; /* Light gray for read-only fields */
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <div class="container">
            <h2>Get in Touch</h2>
            <p>If you have any questions or feedback, please feel free to reach out to us using the form below.</p>
            <form action="submit_contact.php" method="post">
                <?php
                session_start();
                $servername = "localhost";
                $db_username = "root"; // Update with your database username
                $db_password = ""; // Update with your database password
                $dbname = "greenpath";

                // Create connection
                $conn = new mysqli($servername, $db_username, $db_password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if (isset($_SESSION['user_id'])) {
                    // Fetch user details if logged in
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT username, email FROM users WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($row = $result->fetch_assoc()) {
                        $username = htmlspecialchars($row['username']);
                        $email = htmlspecialchars($row['email']);
                        
                        echo '
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="' . $username . '" class="readonly" readonly>
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="' . $email . '" class="readonly" readonly>
                        ';
                    }
                    $stmt->close();
                } else {
                    // Fields for non-logged-in users
                    echo '
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    ';
                }

                $conn->close();
                ?>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </main>
</body>
</html>
