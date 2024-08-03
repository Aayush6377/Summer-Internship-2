<?php
session_start();
$servername = "localhost";
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "greenpath";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if user is logged in
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    
    if ($user_id) {
        // Fetch user details if logged in
        $sql = "SELECT username, email FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $name = htmlspecialchars($row['username']);
            $email = htmlspecialchars($row['email']);
        }
        $stmt->close();
    } else {
        // Use form data if not logged in
        $name = $_POST['name'];
        $email = $_POST['email'];
    }
    
    $message = $_POST['message'];
    
    // Insert message into database
    $sql = "INSERT INTO messages (user_id, name, email, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters and execute the statement
    if ($user_id) {
        $stmt->bind_param("isss", $user_id, $name, $email, $message);
    } else {
        $stmt->bind_param("isss", $user_id, $name, $email, $message);
    }
    
    if ($stmt->execute()) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
