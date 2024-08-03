<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adolescent Mental Health - GreenPath</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
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

        .content {
            padding: 20px;
        }

        .content h1 {
            color: rgb(0,109,82); /* Green theme */
        }

        .content p {
            margin-bottom: 20px;
        }

        footer {
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            padding: 10px;
            text-align: center; /* Center content horizontally */
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
    <?php include 'nav.php'; ?>
    <main>
        <div class="content">
            <h1>Adolescent Mental Health</h1>
            <p>Maintaining mental health during adolescence is vital as this period involves significant emotional, social, and psychological changes. Understanding and supporting adolescent mental health can foster a healthier and more balanced transition into adulthood.</p>

            <h2>Common Mental Health Issues</h2>
            <p>Adolescents may face various mental health challenges. Recognizing these issues early can lead to effective support and intervention:</p>
            <ul>
                <li><strong>Anxiety:</strong> Symptoms include excessive worry, restlessness, and physical symptoms like headaches or stomachaches.</li>
                <li><strong>Depression:</strong> Signs include persistent sadness, loss of interest in activities, changes in sleep and appetite, and feelings of hopelessness.</li>
                <li><strong>Behavioral Disorders:</strong> Conditions like ADHD or conduct disorder can impact attention, behavior, and social interactions.</li>
                <li><strong>Substance Abuse:</strong> Experimentation with drugs or alcohol may occur, which can lead to addiction or other health issues.</li>
            </ul>

            <h2>Promoting Good Mental Health</h2>
            <p>Encouraging positive mental health habits can help adolescents manage stress and build resilience:</p>
            <ul>
                <li><strong>Encourage Open Communication:</strong> Foster a supportive environment where adolescents feel comfortable discussing their feelings and concerns.</li>
                <li><strong>Promote Healthy Relationships:</strong> Help them build and maintain supportive friendships and relationships.</li>
                <li><strong>Support Healthy Lifestyle Choices:</strong> Encourage regular physical activity, balanced nutrition, and adequate sleep.</li>
                <li><strong>Teach Coping Skills:</strong> Provide tools and techniques for managing stress, such as mindfulness and relaxation exercises.</li>
                <li><strong>Seek Professional Help:</strong> If needed, consult with mental health professionals for guidance and support.</li>
            </ul>

            <h2>Resources and Support</h2>
            <p>Access to resources and support can make a significant difference in managing mental health:</p>
            <ul>
                <li><strong>School Counselors:</strong> School-based counselors can offer support and resources for mental health issues.</li>
                <li><strong>Online Resources:</strong> Various websites and apps offer mental health tips and coping strategies.</li>
                <li><strong>Support Groups:</strong> Joining support groups can provide a sense of community and shared experiences.</li>
            </ul>

            <p>Ensuring that adolescents have access to the right support and resources is essential for their overall well-being. Encourage open dialogue and provide a nurturing environment to help them navigate this important stage of their lives.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
