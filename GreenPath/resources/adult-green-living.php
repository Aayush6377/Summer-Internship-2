<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Living for Adults - GreenPath</title>
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
            <h1>Green Living for Adults</h1>
            <p>Adopting a green lifestyle not only benefits the environment but also enhances personal well-being. Making sustainable choices can reduce your carbon footprint and contribute to a healthier planet.</p>

            <h2>Tips for Sustainable Living</h2>
            <p>Here are some practical tips for incorporating green living practices into your daily life:</p>
            <ul>
                <li><strong>Reduce Energy Consumption:</strong> Turn off lights and unplug electronics when not in use. Consider using energy-efficient appliances and LED bulbs.</li>
                <li><strong>Adopt Eco-Friendly Transportation:</strong> Use public transport, carpool, bike, or walk whenever possible. Explore electric or hybrid vehicles for a greener alternative.</li>
                <li><strong>Minimize Waste:</strong> Practice recycling and composting. Avoid single-use plastics and opt for reusable products like water bottles and shopping bags.</li>
                <li><strong>Support Sustainable Products:</strong> Choose products made from recycled materials or those with eco-friendly certifications. Support businesses with sustainable practices.</li>
                <li><strong>Conserve Water:</strong> Fix leaks, use water-saving fixtures, and be mindful of water usage in daily activities such as showering and washing dishes.</li>
                <li><strong>Grow Your Own Food:</strong> Start a home garden or participate in community gardening initiatives to grow fresh produce and reduce food miles.</li>
            </ul>

            <h2>Benefits of Green Living</h2>
            <p>Embracing a green lifestyle offers various benefits, including:</p>
            <ul>
                <li><strong>Environmental Impact:</strong> Reducing waste and energy consumption helps protect natural resources and combat climate change.</li>
                <li><strong>Health Benefits:</strong> Sustainable living often involves healthier lifestyle choices, such as consuming organic foods and reducing exposure to toxins.</li>
                <li><strong>Cost Savings:</strong> Energy-efficient practices and reduced waste can lead to lower utility bills and long-term savings.</li>
                <li><strong>Community Engagement:</strong> Participating in green initiatives fosters a sense of community and collective responsibility towards environmental stewardship.</li>
                <li><strong>Personal Fulfillment:</strong> Contributing to a sustainable future can provide a sense of accomplishment and purpose.</li>
            </ul>

            <h2>Additional Resources</h2>
            <p>Explore the following resources for more information on green living:</p>
            <ul>
                <li>Guides on energy-efficient home improvements</li>
                <li>Online courses and workshops on sustainability</li>
                <li>Local environmental organizations and initiatives</li>
                <li>Books and articles on eco-friendly practices</li>
            </ul>

            <p>Every small action contributes to a larger impact. Embrace green living and inspire others to make sustainable choices for a better world.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
