<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources for Seniors - GreenPath</title>
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
            <h1>Health Resources for Seniors</h1>
            <p>Maintaining health as we age is vital for a high quality of life. Seniors can benefit from resources and practices that support physical, mental, and emotional well-being.</p>

            <h2>Key Areas of Focus</h2>
            <p>For seniors, focus on these areas to maintain and improve health:</p>
            <ul>
                <li><strong>Chronic Disease Management:</strong> Regular check-ups and management of chronic conditions such as diabetes, hypertension, and arthritis are crucial. Follow your healthcare provider’s advice and treatment plans.</li>
                <li><strong>Physical Activity:</strong> Engage in regular, moderate exercise to enhance mobility, balance, and cardiovascular health. Activities such as walking, swimming, and strength training are beneficial.</li>
                <li><strong>Nutrition:</strong> A well-balanced diet can help manage weight and improve overall health. Focus on nutrient-dense foods, including fruits, vegetables, whole grains, and lean proteins.</li>
                <li><strong>Mental Health:</strong> Cognitive health is important. Engage in activities that stimulate the mind, such as puzzles, reading, and social interactions. Seek support for mental health concerns and stress management.</li>
                <li><strong>Safety and Fall Prevention:</strong> Modify living spaces to prevent falls. Ensure adequate lighting, remove tripping hazards, and use assistive devices if needed.</li>
                <li><strong>Social Engagement:</strong> Maintain social connections to combat loneliness and enhance emotional well-being. Participate in community activities, join clubs, or connect with family and friends.</li>
            </ul>

            <h2>Resources and Support</h2>
            <p>Explore these resources to support senior health:</p>
            <ul>
                <li><strong>Senior Centers:</strong> Many communities offer programs and services for seniors, including health screenings, exercise classes, and social events.</li>
                <li><strong>Healthcare Services:</strong> Access primary care, specialist consultations, and home health services as needed. Consider telehealth options for convenience.</li>
                <li><strong>Support Groups:</strong> Join support groups for chronic conditions, caregiving, or mental health to connect with others and share experiences.</li>
                <li><strong>Educational Materials:</strong> Utilize resources such as books, online courses, and workshops focused on senior health and wellness.</li>
                <li><strong>Government and Non-Profit Organizations:</strong> Seek assistance from organizations that provide support, information, and services for seniors, such as Medicare, Medicaid, and local senior advocacy groups.</li>
            </ul>

            <p>Prioritizing health and wellness in later years can significantly enhance quality of life. Utilize available resources and stay proactive in managing health.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
