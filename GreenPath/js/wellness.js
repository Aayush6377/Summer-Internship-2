const questions = [
    { question: "How often do you exercise per week?", options: ["Every day", "3-5 times", "1-2 times", "Rarely or never"], correct: 1 },
    { question: "How many servings of fruits and vegetables do you consume daily?", options: ["5 or more", "3-4", "1-2", "None"], correct: 0 },
    { question: "How many hours of sleep do you get each night?", options: ["8 or more", "6-7", "4-5", "Less than 4"], correct: 1 },
    { question: "How often do you drink water daily?", options: ["More than 8 cups", "6-8 cups", "4-5 cups", "Less than 4 cups"], correct: 0 },
    { question: "How do you rate your stress levels?", options: ["Very high", "High", "Moderate", "Low"], correct: 3 },
    { question: "How often do you engage in relaxation activities?", options: ["Daily", "Weekly", "Monthly", "Rarely or never"], correct: 0 },
    { question: "How often do you have medical check-ups?", options: ["Yearly", "Every few years", "Only when necessary", "Never"], correct: 0 },
    { question: "How balanced is your diet?", options: ["Very balanced", "Somewhat balanced", "Not very balanced", "Not balanced at all"], correct: 0 },
    { question: "How often do you feel fatigued?", options: ["Rarely", "Sometimes", "Often", "Always"], correct: 0 },
    { question: "How often do you experience back pain?", options: ["Never", "Rarely", "Sometimes", "Often"], correct: 0 },
    { question: "Do you smoke?", options: ["No", "Yes, but planning to quit", "Yes", "Occasionally"], correct: 0 },
    { question: "How often do you consume alcohol?", options: ["Never", "Occasionally", "Weekly", "Daily"], correct: 0 },
    { question: "Do you practice mindfulness or meditation?", options: ["Daily", "Weekly", "Monthly", "Never"], correct: 0 },
    { question: "How often do you socialize with friends and family?", options: ["Daily", "Weekly", "Monthly", "Rarely"], correct: 0 },
    { question: "How do you rate your overall mental health?", options: ["Excellent", "Good", "Fair", "Poor"], correct: 0 }
];

let currentQuestionIndex = 0;
let score = 0;

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

function loadQuestion() {
    const questionContainer = document.getElementById('question-container');
    questionContainer.innerHTML = '';

    const questionData = questions[currentQuestionIndex];
    const questionDiv = document.createElement('div');
    questionDiv.className = 'question';

    const questionText = document.createElement('p');
    questionText.textContent = `${currentQuestionIndex + 1}. ${questionData.question}`;

    const optionsDiv = document.createElement('div');
    const shuffledOptions = shuffle([...questionData.options]);

    shuffledOptions.forEach(option => {
        const optionLabel = document.createElement('label');
        const optionInput = document.createElement('input');
        optionInput.type = 'radio';
        optionInput.name = `question${currentQuestionIndex}`;
        optionInput.value = option;

        optionLabel.appendChild(optionInput);
        optionLabel.appendChild(document.createTextNode(option));
        optionsDiv.appendChild(optionLabel);
        optionsDiv.appendChild(document.createElement('br'));
    });

    questionDiv.appendChild(questionText);
    questionDiv.appendChild(optionsDiv);
    questionContainer.appendChild(questionDiv);
}

function nextQuestion() {
    const form = document.getElementById('quiz-form');
    const formData = new FormData(form);
    const userAnswer = formData.get(`question${currentQuestionIndex}`);

    if (userAnswer) {
        const questionData = questions[currentQuestionIndex];
        if (userAnswer === questionData.options[questionData.correct]) {
            score++;
        }
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            loadQuestion();
        } else {
            showResults();
        }
    } else {
        alert('Please select an option before proceeding.');
    }
}

function showResults() {
    const resultText = document.getElementById('result-text');
    if (score > 10) {
        resultText.textContent = "Great job! You have a good understanding of wellness programs.";
    } else if (score > 5) {
        resultText.textContent = "Good effort! Consider incorporating more wellness practices into your routine.";
    } else {
        resultText.textContent = "You might benefit from learning more about wellness programs.";
    }

    document.getElementById('quiz').style.display = 'none';
    document.getElementById('results').style.display = 'block';
}

window.onload = function() {
    shuffle(questions);
    loadQuestion();
}
