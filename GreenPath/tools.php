<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainability Tools - GreenPath</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/background.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); 
            z-index: -1;
        }

        header, footer {
            background-color: rgb(0,109,82); 
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
            background-color: rgb(0,109,82); 
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff; 
            padding: 10px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #c8e6c9; 
        }

        main {
            flex: 1;
            padding: 20px;
        }

        .tools {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .tools h2 {
            color: rgb(0,109,82); 
            border-bottom: 2px solid rgb(0,109,82);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .tiles-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .tile {
            width: 300px;
            height: 200px;
            background-color: #e8f5e9;
            border: 2px solid #a5d6a7; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
            text-align: center;
            line-height: 200px;
            color: #333;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        .tile:hover {
            background-color: rgb(0,109,82); 
            color: #fff;
            transform: scale(1.05);
        }

        .tile-description {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 109, 82, 0.8);
            color: #fff;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            line-height: 1.4;
        }

        .tile:hover .tile-description {
            opacity: 1;
            visibility: visible;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
        <section class="tools">
            <h2>Sustainability Tools</h2>
            <div class="tiles-container">
                <a href="tools/bmi_calculator.php" class="tile">
                    <span>BMI Calculator</span>
                    <div class="tile-description">Calculate your Body Mass Index (BMI) to assess your health.</div>
                </a>
                <a href="tools/fitness_tracker.php" class="tile">
                    <span>Fitness Tracker</span>
                    <div class="tile-description">Track your fitness activities and monitor your progress.</div>
                </a>
                <a href="tools/symptom_checker.php" class="tile">
                    <span>Symptom Checker</span>
                    <div class="tile-description">Check your symptoms and get possible disease suggestions.</div>
                </a>
                <a href="tools/carbon_footprint.php" class="tile">
                    <span>Carbon Footprint Calculator</span>
                    <div class="tile-description">Calculate your carbon footprint and find ways to reduce it.</div>
                </a>
                <a href="tools/water_usage.php" class="tile">
                    <span>Water Usage Calculator</span>
                    <div class="tile-description">Estimate your water usage and discover conservation tips.</div>
                </a>
                <a href="tools/energy_consumption.php" class="tile">
                    <span>Energy Consumption Tracker</span>
                    <div class="tile-description">Track your energy usage and identify areas for improvement.</div>
                </a>
                <a href="tools/recycling_guide.php" class="tile">
                    <span>Recycling Guide</span>
                    <div class="tile-description">Learn how to properly recycle different materials.</div>
                </a>
                <a href="tools/eco_friendly_guide.php" class="tile">
                    <span>Eco-Friendly Product Finder</span>
                    <div class="tile-description">Find eco-friendly products and make sustainable choices.</div>
                </a>
                <a href="ChatBot/bot.php" class="tile">
                    <span>Chat with Us</span>
                    <div class="tile-description">Get assistance and information through our chatbot.</div>
                </a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
