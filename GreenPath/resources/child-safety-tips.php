<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Safety Tips - GreenPath</title>
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
            <h1>Child Safety Tips</h1>
            <p>Ensuring the safety of children is a top priority for parents and caregivers. Here are some essential tips to help keep children safe in various situations:</p>
            
            <h2>Home Safety</h2>
            <p>Make your home a safe environment by following these guidelines:</p>
            <ul>
                <li><strong>Secure Hazardous Items:</strong> Keep cleaning supplies, medications, and sharp objects out of reach.</li>
                <li><strong>Install Safety Gates:</strong> Use gates to block off stairways and other potentially dangerous areas.</li>
                <li><strong>Cover Electrical Outlets:</strong> Use outlet covers to prevent children from inserting objects into sockets.</li>
                <li><strong>Anchor Furniture:</strong> Secure heavy furniture to the wall to prevent tipping.</li>
            </ul>

            <h2>Outdoor Safety</h2>
            <p>When children are outside, it's important to ensure they are safe from potential hazards:</p>
            <ul>
                <li><strong>Supervise Play:</strong> Always supervise children during outdoor play to prevent accidents.</li>
                <li><strong>Teach Road Safety:</strong> Educate children about road safety and use pedestrian crossings.</li>
                <li><strong>Provide Sun Protection:</strong> Apply sunscreen and dress children in protective clothing and hats.</li>
                <li><strong>Ensure Safe Play Equipment:</strong> Regularly check that playground equipment is in good condition.</li>
            </ul>

            <h2>Online Safety</h2>
            <p>With increasing online activity, ensuring internet safety is crucial:</p>
            <ul>
                <li><strong>Monitor Online Activity:</strong> Keep track of the websites and apps your child uses.</li>
                <li><strong>Set Privacy Settings:</strong> Adjust privacy settings on social media accounts to protect personal information.</li>
                <li><strong>Educate About Online Risks:</strong> Teach children about the dangers of sharing personal information and interacting with strangers online.</li>
            </ul>

            <h2>Emergency Preparedness</h2>
            <p>Being prepared for emergencies can make a big difference:</p>
            <ul>
                <li><strong>Have an Emergency Plan:</strong> Create and practice a family emergency plan, including escape routes and emergency contacts.</li>
                <li><strong>Teach Basic First Aid:</strong> Educate children on basic first aid procedures and how to seek help in an emergency.</li>
                <li><strong>Keep Emergency Numbers Handy:</strong> Ensure children know important phone numbers, including those of parents and emergency services.</li>
            </ul>

            <p>By implementing these safety tips, you can help create a safer environment for your child and provide peace of mind for yourself.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
