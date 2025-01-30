<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Reviews - Online Event Management System</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background:linear-gradient(to right, #ff9a9e, #ffdab9) ;
            background-size: cover;
            color: white;
            background-color: rgba(0, 0, 0, 0.7); /* Dim the background */
            background-blend-mode: darken;
        }
        header {
            background: rgba(0, 0, 0, 0);
            padding: 20px;
            text-align: center;
        }
        header h1 {
            color: #ffab40;
            margin: 0;
        }
        nav {
            display: flex;
            justify-content: center;
            background: rgba(0, 0, 0, 0.9);
            padding: 10px 0;
        }
        nav a {
            color: #ffab40;
            margin: 0 20px;
            text-decoration: none;
            font-size: 18px;
        }
        nav a:hover {
            color: #fff;
        }
        .reviews {
            padding: 60px 20px;
            text-align: center;
        }
        .reviews h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ffab40;
        }
        .review {
            background: rgba(0, 0, 0, 0.8);
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        .review p {
            font-size: 18px;
            line-height: 1.6;
            color: #ddd;
        }
        .review .author {
            font-size: 16px;
            color: #ffab40;
            margin-top: 10px;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        footer p {
            margin: 0;
            color: #ffab40;
        }
    </style>
</head>
<body>
    <header>
        <h1>Client Reviews</h1>
    </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="gallery.php">Our Gallery</a>
        <a href="register.php">Register</a>
        <a href="contact_us.php">Contact us</a>
    </nav>

    <div class="reviews">
        <h2>What Our Clients Say</h2>
        <div class="review">
            <p>"The wedding event organized by the team was flawless. The decorations, the planning, and the execution were perfect. Our guests were impressed, and so were we!"</p>
            <p class="author">- John & Emma</p>
        </div>
        <div class="review">
            <p>"We had a corporate event, and it went smoothly thanks to the professional and dedicated staff. Highly recommend their services!"</p>
            <p class="author">- Corporate Inc.</p>
        </div>
        <div class="review">
            <p>"The musical concert was an unforgettable experience. Everything from the sound to the lighting was handled expertly. Looking forward to the next event!"</p>
            <p class="author">- Music Lovers</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Online Event Management System. All rights reserved.</p>
    </footer>
</body>
</html>
