<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Event Management System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #ffdab9);
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .container {
            width: 600px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .container h1 {
            color: #ffab40;
            margin-bottom: 30px;
        }
        .container label {
            color: #ffab40;
        }
        .container input[type="text"], .container input[type="email"], .container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ffab40;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            transition: background 0.3s ease;
            margin: 10px 0;
        }
        .container button:hover {
            background: #0056b3;
        }
        nav {
            margin-top: 20px;
        }
        nav a {
            color: #ffab40;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }
        nav a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
  <h1>Contact Us</h1>
  <nav>
    <a href="index.html">Login</a>
    <a href="gallery.html">Our Gallery</a>
    <a href="Client Reviews.html">Client Reviews</a>
    <a href="register.html">Register</a>
  </nav>
  <form action="connect.php" method="post">
    <label for="username">Name:</label>
    <input type="text" id="username" name="username" placeholder="Your name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" placeholder="Subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" placeholder="Your message" required></textarea>

    <button type="submit">Submit</button>
    <button type="button" onclick="alert('For contact, call this number: 9550089135')">Contact Number</button>
  </form>
</div>
</body>
</html>
