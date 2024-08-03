<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources</title>
    <style>
        footer {
            background-color: rgb(0,109,82); /* Green theme */
            color: #fff;
            padding: 10px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between; /* Aligns items to the edges */
            align-items: center;
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
        }

        .footer-links {
            margin-bottom: 10px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links ul li {
            display: inline;
            margin: 0 120px;
        }

        .footer-links ul li a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover {
            color: #c8e6c9;
        }

        .footer-info p {
            margin: 0;
            text-align: right; 
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <ul>
                    <li><a href="../footer/aboutus.php">About Us</a></li>
                    <li><a href="../footer/contact.php">Contact Us</a></li>
                    <li><a href="../footer/privacy.php">Privacy Policy</a></li>
                    <li><a href="../footer/terms.php">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
