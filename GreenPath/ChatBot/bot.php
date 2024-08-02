<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder Chatbot</title>
    <link rel="stylesheet" href="bot.css">
</head>
<body>
    <?php
    include 'nav.php';
    ?>
    <div class="chat-container">
        <div class="chat-box" id="chat-box">
            <div class="chat-message bot-message">
                <img class="profile-pic bot-pic" src="img/bot.png" alt="Bot">
                <div class="message-content">
                    <p>Hello! How can I assist you today?</p>
                </div>
            </div>
        </div>
        
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Type your message...">
        </div>
        <div id="loading-indicator" style="display: none;">
            <img id="loading-img" src="img/loading.gif" alt="Loading...">
       </div>

    </div>
    </div>

    <script src="bot.js"></script>
</body>
</html>
