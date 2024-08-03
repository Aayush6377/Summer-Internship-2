function sendMessage() {
    var userInput = document.getElementById("user-input");
    var userMessage = userInput.value.trim();

    if (userMessage !== "") {
        appendMessage(userMessage, "user");
        processUserMessage(userMessage);
        userInput.value = "";
    }
}


function appendMessage(message, sender) {
    var chatBox = document.getElementById("chat-box");
    var messageElement = document.createElement("div");
    messageElement.classList.add("chat-message");

    var profilePicClass = sender === "bot" ? "bot-pic" : "user-pic";
    var messageContentClass = sender === "bot" ? "bot-message" : "user-message";

    var formattedMessage = formatBotResponse(message, sender);

    if (isCodeBlock(message)) {
        var escapedMessage = message.replace('```', "");
        var escapedMessage = message.replace('```', "");

        messageElement.innerHTML = `
            <img class="profile-pic ${profilePicClass}" src="img/${sender}.png" alt="${sender}">
            <div class="message-content code-block">
                <pre><code>${escapedMessage}</code></pre>
            </div>
        `;
    } else if (formattedMessage !== message) {
        messageElement.innerHTML = `
            <img class="profile-pic ${profilePicClass}" src="img/${sender}.png" alt="${sender}">
            <div class="message-content">
                ${formattedMessage}
            </div>
        `;
    } else {
        messageElement.innerHTML = `
            <img class="profile-pic ${profilePicClass}" src="img/${sender}.png" alt="${sender}">
            <div class="message-content">
                ${message}
            </div>
        `;
    }

    messageElement.classList.add(messageContentClass);
    chatBox.appendChild(messageElement);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function isCodeBlock(message) {
    return message.includes("```") && message.includes("```");
}


function formatBotResponse(message, sender) {
    if (sender === "bot" && message.startsWith("**") && message.includes("**")) {
        var sections = message.split("**").filter(Boolean); 
        var formattedMessage = '';

        sections.forEach((section, index) => {
            if (index % 2 === 0) { 
                formattedMessage += `<strong>${section}</strong><ul>`;
            } else { 
                var items = section.trim().split('*').filter(Boolean); 
                items.forEach(item => {
                    formattedMessage += `<li>${item.trim()}</li>`;
                });
                formattedMessage += `</ul>`;
            }
        });

        return formattedMessage;
    }

    return message;
}


function processUserMessage(message) {
    var loadingIndicator = document.getElementById("loading-indicator");
    loadingIndicator.style.display = "block";

    fetch('generator.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => {
        var botResponse = data.response;
        appendMessage(botResponse, "bot");

        loadingIndicator.style.display = "none";
    })
    .catch(error => {
        console.error('Error:', error);
        var botResponse = "Oops! Something went wrong. Please check your internet connection.";
        appendMessage(botResponse, "bot");

        loadingIndicator.style.display = "none";
    });
}


document.getElementById("user-input").addEventListener("keydown", function(event) {
    if (event.keyCode === 13) {
        sendMessage();
    }
});
