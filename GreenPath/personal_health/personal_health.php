<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Health</title>
    <link rel="stylesheet" href="personal_health.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container">
        <h1>Personal Health</h1>
        <div class="age-selector">
            <label for="age-group">Select Age Group:</label>
            <select id="age-group" name="age-group" onchange="updateContent()">
                <option value="" selected disabled>Select Age Group</option>
                <option value="child">Child</option>
                <option value="teen">Teen</option>
                <option value="adult">Adult</option>
                <option value="senior">Senior</option>
            </select>
        </div>

        <section id="daily-tips">
            <h2>Daily Health Tips</h2>
            <div id="health-tips"></div>
        </section>

        <section id="exercise-routines">
            <h2>Exercise Routines</h2>
            <div id="exercise-content"></div>
        </section>

        <section id="meal-planning">
            <h2>Meal Planning</h2>
            <div id="meal-plans"></div>
        </section>

        <section id="importance">
            <h2>Importance of Personal Health</h2>
            <div id="importance-content"></div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
    
    <script>
        const content = {
            child: {
                tips: `
                    <ul>
                        <li>Ensure your child gets at least 60 minutes of physical activity each day.</li>
                        <li>Include fruits and vegetables in their diet.</li>
                        <li>Limit screen time to encourage more physical play.</li>
                        <li>Ensure they get sufficient sleep each night (9-12 hours).</li>
                        <li>Encourage handwashing to prevent illness.</li>
                        <li>Promote drinking water over sugary drinks.</li>
                    </ul>`,
                exercise: `
                    <ul>
                        <li>Activities like playing tag, riding a bike, or swimming are great for children.</li>
                        <li>Encourage outdoor play like soccer, basketball, or hiking.</li>
                        <li>Join a local sports team or class.</li>
                        <li>Set up an obstacle course in the backyard.</li>
                        <li>Have a family dance party.</li>
                        <li>Practice yoga for kids.</li>
                    </ul>`,
                meal: `
                    <ul>
                        <li>Provide a balanced diet with plenty of fruits, vegetables, whole grains, and lean proteins.</li>
                        <li>Include a variety of foods to ensure all nutrient needs are met.</li>
                        <li>Prepare healthy snacks like sliced fruits, nuts, and yogurt.</li>
                        <li>Limit sugary treats and drinks.</li>
                        <li>Encourage eating breakfast every day.</li>
                        <li>Involve children in meal preparation to teach healthy eating habits.</li>
                    </ul>`,
                importance: `
                    <p>
                        Good health in childhood sets the foundation for a healthy adult life. Encourage healthy habits early on. Regular physical activity, balanced nutrition, and good hygiene practices are crucial for their development.
                    </p>`
            },
            teen: {
                tips: `
                    <ul>
                        <li>Teenagers should aim for at least 60 minutes of exercise daily.</li>
                        <li>Encourage healthy eating habits.</li>
                        <li>Promote a regular sleep schedule (8-10 hours).</li>
                        <li>Limit junk food and sugary drinks.</li>
                        <li>Encourage hydration with water.</li>
                        <li>Practice good mental health habits, like mindfulness or journaling.</li>
                    </ul>`,
                exercise: `
                    <ul>
                        <li>Teens can benefit from sports, running, and gym workouts.</li>
                        <li>Encourage participation in physical activities.</li>
                        <li>Include a mix of cardio, strength training, and flexibility exercises.</li>
                        <li>Try activities like martial arts, dance, or rock climbing.</li>
                        <li>Go for regular bike rides or hikes.</li>
                        <li>Join a community sports league.</li>
                    </ul>`,
                meal: `
                    <ul>
                        <li>Teens need a variety of nutrients, including protein, calcium, and iron.</li>
                        <li>Include protein-rich foods, whole grains, and plenty of fruits and vegetables.</li>
                        <li>Limit fast food and encourage home-cooked meals.</li>
                        <li>Promote healthy snacking, like fruits, nuts, and yogurt.</li>
                        <li>Encourage drinking milk or dairy alternatives for bone health.</li>
                        <li>Ensure balanced meals with proper portion sizes.</li>
                    </ul>`,
                importance: `
                    <p>
                        Health during teenage years can impact adulthood. Promote physical activity and balanced nutrition. Encourage healthy habits to support their growth, development, and mental well-being.
                    </p>`
            },
            adult: {
                tips: `
                    <ul>
                        <li>Adults should aim for at least 150 minutes of moderate aerobic activity or 75 minutes of vigorous activity each week.</li>
                        <li>Maintain a balanced diet with a variety of nutrients.</li>
                        <li>Ensure adequate sleep (7-9 hours per night).</li>
                        <li>Manage stress through mindfulness or relaxation techniques.</li>
                        <li>Stay hydrated by drinking plenty of water.</li>
                        <li>Avoid smoking and limit alcohol consumption.</li>
                    </ul>`,
                exercise: `
                    <ul>
                        <li>Include a mix of cardio, strength training, and flexibility exercises in your routine.</li>
                        <li>Try activities like running, cycling, or swimming.</li>
                        <li>Incorporate weight training to build muscle and strength.</li>
                        <li>Practice yoga or pilates for flexibility and mental relaxation.</li>
                        <li>Join a fitness class or group for motivation.</li>
                        <li>Stay active throughout the day by taking breaks to move.</li>
                    </ul>`,
                meal: `
                    <ul>
                        <li>Focus on a balanced diet with a variety of nutrients.</li>
                        <li>Include lean proteins, healthy fats, and plenty of fruits and vegetables.</li>
                        <li>Limit processed foods and sugary snacks.</li>
                        <li>Plan meals ahead to ensure healthy choices.</li>
                        <li>Practice portion control to avoid overeating.</li>
                        <li>Stay consistent with meal timing to maintain energy levels.</li>
                    </ul>`,
                importance: `
                    <p>
                        Maintaining good health as an adult can prevent chronic diseases and improve quality of life. Consistent healthy habits support physical, mental, and emotional well-being, contributing to a fulfilling life.
                    </p>`
            },
            senior: {
                tips: `
                    <ul>
                        <li>Seniors should aim for at least 150 minutes of moderate-intensity aerobic activity each week.</li>
                        <li>Include balance and strength exercises to prevent falls.</li>
                        <li>Stay socially active to support mental health.</li>
                        <li>Ensure adequate sleep (7-8 hours per night).</li>
                        <li>Maintain regular health check-ups.</li>
                        <li>Stay hydrated and eat a nutrient-rich diet.</li>
                    </ul>`,
                exercise: `
                    <ul>
                        <li>Low-impact activities like walking, swimming, and yoga are beneficial for seniors.</li>
                        <li>Include exercises that improve balance and flexibility.</li>
                        <li>Join a senior fitness class or community center activities.</li>
                        <li>Practice gentle stretching daily.</li>
                        <li>Engage in recreational activities like gardening or dancing.</li>
                        <li>Stay consistent with a routine to maintain mobility and strength.</li>
                    </ul>`,
                meal: `
                    <ul>
                        <li>Ensure a nutrient-rich diet with plenty of fiber, lean proteins, and hydration.</li>
                        <li>Focus on foods that are easy to digest and nutrient-dense.</li>
                        <li>Include a variety of fruits, vegetables, whole grains, and lean proteins.</li>
                        <li>Limit salt and sugar intake.</li>
                        <li>Stay hydrated by drinking water throughout the day.</li>
                        <li>Consider supplements if necessary, after consulting with a healthcare provider.</li>
                    </ul>`,
                importance: `
                    <p>
                        Good health in senior years is crucial for independence and quality of life. Focus on balanced nutrition and regular exercise. Staying active and engaged can improve physical, mental, and emotional well-being.
                    </p>`
            }
        };

        function updateContent() {
            const ageGroup = document.getElementById('age-group').value;
            if (ageGroup) {
                document.getElementById('health-tips').innerHTML = content[ageGroup].tips;
                document.getElementById('exercise-content').innerHTML = content[ageGroup].exercise;
                document.getElementById('meal-plans').innerHTML = content[ageGroup].meal;
                document.getElementById('importance-content').innerHTML = content[ageGroup].importance;
            } else {
                document.getElementById('health-tips').innerHTML = "";
                document.getElementById('exercise-content').innerHTML = "";
                document.getElementById('meal-plans').innerHTML = "";
                document.getElementById('importance-content').innerHTML = "";
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateContent(); // Initial load
        });


        document.addEventListener('DOMContentLoaded', () => {
            updateContent(); // Initial load
        });
    </script>
</body>
</html>
