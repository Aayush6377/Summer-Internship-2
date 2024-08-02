<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $userMessage = $data['message'];

    $userQuestion = $userMessage;

    include('../gemini/response.php');
    $botResponse = response($userQuestion);

    echo json_encode(['response' => $botResponse]);
}
?>
