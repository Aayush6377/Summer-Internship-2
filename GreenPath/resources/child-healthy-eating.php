<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Eating for Kids - GreenPath</title>
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
            <h1>Healthy Eating for Kids</h1>
            <p>Healthy eating is crucial for children’s growth and development. It helps them build a strong immune system, develop properly, and maintain a healthy weight. A well-balanced diet also fosters better mental and physical health, which is essential for overall well-being.</p>
            
            <h2>Key Components of a Balanced Diet</h2>
            <p>To ensure your child gets all the nutrients they need, include the following components in their diet:</p>
            <ul>
                <li><strong>Fruits and Vegetables:</strong> Aim for a variety of colors and types to provide essential vitamins and minerals.</li>
                <li><strong>Whole Grains:</strong> Choose whole-grain bread, pasta, and cereals over refined grains to provide more fiber and nutrients.</li>
                <li><strong>Lean Proteins:</strong> Incorporate sources like chicken, fish, beans, and legumes to support muscle development and repair.</li>
                <li><strong>Dairy:</strong> Include milk, yogurt, and cheese to ensure adequate calcium intake for strong bones and teeth.</li>
                <li><strong>Healthy Fats:</strong> Opt for sources such as avocados, nuts, and olive oil, and limit saturated and trans fats.</li>
            </ul>

            <h2>Tips for Encouraging Healthy Eating</h2>
            <p>Making healthy food choices enjoyable and accessible is key to developing good eating habits. Here are some tips:</p>
            <ul>
                <li><strong>Involve Kids in Meal Planning:</strong> Let them help choose and prepare healthy meals to increase their interest in trying new foods.</li>
                <li><strong>Make Meals Fun:</strong> Use creative presentations and engage kids in making their own healthy snacks.</li>
                <li><strong>Lead by Example:</strong> Demonstrate healthy eating habits by making nutritious choices yourself.</li>
                <li><strong>Keep Healthy Snacks Available:</strong> Stock up on fruits, vegetables, and whole-grain snacks for easy access.</li>
            </ul>

            <h2>Additional Resources</h2>
            <p>For more information on healthy eating, consider exploring the following resources:</p>
            <ul>
                <li>Healthy Eating Guidelines for Children</li>
                <li>Nutrition and Meal Planning</li>
                <li>Fun and Healthy Recipes for Kids</li>
            </ul>

            <p>For personalized advice, consult with a pediatric nutritionist or your child's healthcare provider.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
