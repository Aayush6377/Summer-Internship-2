<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "greenpath";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkUsername = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        $usernameError = "Username already exists. Please choose a different username.";
    } else {
        $sql = "INSERT INTO users (name, phone, email, username, password) VALUES ('$name', '$phone', '$email', '$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Fitness Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: rgb(0, 109, 82);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: rgb(0, 109, 82);
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #388E3C;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
    <script>
        function validateForm() {
            let name = document.forms["signupForm"]["name"].value;
            let phone = document.forms["signupForm"]["phone"].value;
            let email = document.forms["signupForm"]["email"].value;
            let username = document.forms["signupForm"]["username"].value;
            let password = document.forms["signupForm"]["password"].value;
            let confirmPassword = document.forms["signupForm"]["confirm_password"].value;

            let error = false;
            let errorMessage = "";

            if (name == "" || phone == "" || email == "" || username == "" || password == "" || confirmPassword == "") {
                errorMessage += "All fields must be filled out.\n";
                error = true;
            }

            if (phone.length != 10 || isNaN(phone)) {
                errorMessage += "Phone number must be 10 digits long.\n";
                error = true;
            }

            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!email.match(emailPattern)) {
                errorMessage += "Invalid email address.\n";
                error = true;
            }

            if (password != confirmPassword) {
                errorMessage += "Passwords do not match.\n";
                error = true;
            }

            if (error) {
                alert(errorMessage);
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <?php if (isset($usernameError)): ?>
            <div class="error"><?php echo $usernameError; ?></div>
        <?php endif; ?>
        <form name="signupForm" action="" method="post" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
