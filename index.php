<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $upwd = $_POST['upswd'];
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "pract";

    // Check if MySQLi extension is enabled
    if (!function_exists('mysqli_connect')) {
        die("MySQLi extension is not enabled. Please enable it in your php.ini file.");
    }

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO login (uname, upwd) VALUES (?, ?)");
    $stmt->bind_param("ss", $uname, $upwd);

    if ($stmt->execute()) {
        // Redirect to home.php on successful login
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Event Booking System</title>
    <style>
        /* Add your existing CSS styles here */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #ffdab9);
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .header {
            width: 100%;
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            color: #ffab40;
            font-size: 36px;
            font-weight: bold;
            border-bottom: 4px solid #ffab40;
        }
        .box {
            width: 350px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.85);
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }
        .box h1 {
            margin: 0 0 20px;
            padding: 0;
            color: #ffab40;
            font-size: 28px;
            font-weight: bold;
        }
        .box p {
            margin: 0;
            font-size: 16px;
            color: #ffab40;
        }
        .box input[type="text"], .box input[type="password"] {
            border: none;
            background: rgba(255, 255, 255, 0.2);
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #ffab40;
            padding: 14px 10px;
            width: 280px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .box input[type="text"]:focus, .box input[type="password"]:focus {
            width: 300px;
            border-color: #ff6f00;
        }
        .box input[type="submit"] {
            border: none;
            background: #ffab40;
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }
        .box input[type="submit"]:hover {
            background: #ff6f00;
        }
        .box a {
            color: #ffab40;
            font-size: 14px;
            text-decoration: none;
        }
        .box a:hover {
            color: #ff6f00;
        }
        .role-select {
            margin: 20px 0;
        }
        .role-select label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
        }
        .role-select input {
            margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            if (!localStorage.getItem('accounts')) {
                const accounts = [
                    { username: "testuser", password: "testpassword", role: "user" },
                    { email: "example@gmail.com", password: "examplepassword", role: "user" },
                    { username: "username", password: "examplepassword", role: "user" },
                    { email: "reddygarivarsha4@gmail.com", password: "Varsha@90", role: "admin" }
                ];
                localStorage.setItem('accounts', JSON.stringify(accounts));
            }
        });

        function login(event) {
            event.preventDefault();

            var uname = document.getElementById("email").value.trim();
            var pwd = document.getElementById("pwd1").value.trim();
            var emailFilter = /^[a-zA-Z0-9._%+-]+@gmail.com$/;
            var usernameFilter = /^[a-zA-Z0-9._-]+$/;
            var role = document.querySelector('input[name="role"]:checked').value;

            if (uname === '') {
                alert("Please enter username or Gmail address.");
                return false;
            } else if (pwd === '') {
                alert("Enter the password");
                return false;
            } else if (!emailFilter.test(uname) && !usernameFilter.test(uname)) {
                alert("Enter a valid Gmail address or username.");
                return false;
            } else {
                var accounts = JSON.parse(localStorage.getItem('accounts')) || [];
                var account = accounts.find(function(account) {
                    return ((account.username && account.username === uname) || (account.email && account.email === uname)) && account.password === pwd && account.role === role;
                });

                if (account) {
                    if (role === 'admin') {
                        alert('Login as Admin Successful. Redirecting to admin page...');
                        window.location.href = "admin.html";
                    } else {
                        alert('Login Successfully. Redirecting to home.php...');
                        window.location.href = "home.php";
                    }
                } else {
                    alert('Account does not exist. Please enter correct username or email and password.');
                }
            }
        }
    </script>
</head>
<body>
    <div class="header">
         EVENT BOOKING SYSTEM
    </div>
    <div class="box">
        <h1>Login Here</h1>
        <form action="" method="POST" onsubmit="login(event)">
            <p>Username or Gmail</p>
            <input type="text" name="uname" id="email" placeholder="Enter Username or Gmail" maxlength="30" required>
            <p>Password</p>
            <input type="password" name="upswd" id="pwd1" placeholder="Enter password" required>
            <div class="role-select">
                <label>
                    <input type="radio" name="role" value="user" checked> Customer
                </label>
                <label>
                    <input type="radio" name="role" value="admin"> Admin
                </label>
            </div>
            <input type="submit" name="submit" value="send data"><br>
            <a href="signup.php">Sign up now?</a>
        </form>
    </div>
</body>
</html>indexphp