<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Event Booking System</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #ffdab9);
            background-size: cover;
            color: white;
            background-color: rgba(0, 0, 0, 0.7); /* Dim the background */
            background-blend-mode: darken;
        }
        header {
            background: rgba(0, 0, 0, 0.7);
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
        .content {
            padding: 60px 20px;
            text-align: center;
        }
        .content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ffab40;
        }
        .content p {
            font-size: 18px;
            color: #fff;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .content .cta {
            margin-top: 30px;
            padding: 15px 30px;
            background: #ffab40;
            color: #000;
            text-decoration: none;
            font-size: 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .content .cta:hover {
            background: #e6892b;
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
        <h1>Welcome to Our Event Booking  System</h1>
    </header>
    <nav>
        <a href="gallery.html">Our Gallery</a>
        <a href="Client Reviews.html">Client Reviews</a>
        <a href="register.html">Book Now</a>
        <a href="contact_us.html">Contact Us</a>
    </nav>

    <div class="content">
        <h2>Discover the Perfect Event Experience</h2>
        <p>
            At our Event Management System, we specialize in creating unforgettable experiences tailored to your needs. Whether you're planning a corporate gathering, a wedding, or a birthday party, our team of experts is here to ensure every detail is perfect.
        </p>
        <p>
            From seamless coordination to personalized service, we handle all the logistics so you can focus on enjoying your event. Explore our gallery to see some of our past events, read client reviews to hear from those who have worked with us, and get in touch with us to start planning your next big event.
        </p>
        <a href="register.html" class="cta">Get Started Today</a>
    </div>

    <footer>
        <p>&copy; 2024 Online Event Management System. All rights reserved.</p>
    </footer>
</body>
</html>
