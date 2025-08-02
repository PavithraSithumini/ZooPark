<?php
session_start();

// Database connection
$host = 'localhost';
$dbname = 'zoo_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputEmail = $_POST['username']; // Email input
        $inputPassword = $_POST['password']; // Password input

        // Fetch the user from the database based on the email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $inputEmail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists and password matches
        if ($user && $inputPassword == $user['password']) { // Replace with password_hash for security

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['email'] = $user['email'];

            // Redirect based on role
            if ($user['role'] == 'admin') {
                header('Location: Admin_dashboard.php'); // Redirect to Admin Dashboard
                exit(); // Stop further script execution
            } else if ($user['role'] == 'volunteer') {
                header('Location: add_animal.php'); // Redirect to Volunteer Dashboard
                exit(); // Stop further script execution
            }
        } else {
            // If login fails
            echo "<div class='alert alert-danger'>Invalid email or password!</div>";
        }
    }
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Connection failed: " . $e->getMessage() . "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Zoo Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .forgot-password {
            text-align: center;
            display: block;
            margin-top: -10px;
            margin-bottom: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="container-fluid">
            <img src="./images/logo-white.png" alt="Logo" width="50px">
        </div>
        <h2>Zoo Community Login</h2>
        <!-- Form action set to the same page -->
        <form action="" method="post"> <!-- Keep the action empty to post to the same page -->
            <label for="username">Username or Email:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">

        </form>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>