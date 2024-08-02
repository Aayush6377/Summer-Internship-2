<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adolescent Fashion - GreenPath</title>
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
            <h1>Fashion Trends for Adolescents</h1>
            <p>Fashion is an important aspect of adolescent life, offering a means of self-expression and confidence. Staying updated with trends and understanding personal style can enhance self-esteem and social interactions.</p>

            <h2>Current Fashion Trends</h2>
            <p>Here are some popular fashion trends among adolescents:</p>
            <ul>
                <li><strong>Casual Comfort:</strong> Comfortable and relaxed outfits like oversized hoodies, joggers, and sneakers are trending.</li>
                <li><strong>Streetwear:</strong> Bold graphic tees, cargo pants, and trendy sneakers are popular choices.</li>
                <li><strong>Vintage Revival:</strong> Vintage and retro styles, such as high-waisted jeans and vintage band tees, are making a comeback.</li>
                <li><strong>Eco-Friendly Fashion:</strong> Sustainable and eco-friendly clothing options are gaining traction among fashion-conscious youth.</li>
                <li><strong>Personalization:</strong> Customizable pieces and DIY fashion projects allow for unique personal expression.</li>
            </ul>

            <h2>Building a Personal Style</h2>
            <p>Developing a personal style can help adolescents express their individuality and build confidence:</p>
            <ul>
                <li><strong>Explore Different Styles:</strong> Experiment with various fashion styles to find what resonates with you.</li>
                <li><strong>Understand Body Types:</strong> Choose clothing that enhances your body shape and makes you feel comfortable.</li>
                <li><strong>Mix and Match:</strong> Combine different pieces to create unique outfits that reflect your personality.</li>
                <li><strong>Stay Informed:</strong> Follow fashion blogs, social media influencers, and fashion magazines for inspiration.</li>
            </ul>

            <h2>Fashion and Confidence</h2>
            <p>Fashion can significantly impact confidence and self-image. Wearing outfits that you love and feel good in can boost self-esteem and positively affect social interactions.</p>

            <h2>Resources for Fashion Inspiration</h2>
            <p>For more fashion tips and inspiration, consider exploring:</p>
            <ul>
                <li>Fashion blogs and websites</li>
                <li>Social media fashion influencers</li>
                <li>Fashion magazines and lookbooks</li>
                <li>Local fashion events and boutiques</li>
            </ul>

            <p>Remember, fashion is a form of self-expression, and it's important to wear what makes you feel confident and happy.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
