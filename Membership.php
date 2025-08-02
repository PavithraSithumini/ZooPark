<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="password"], select, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
  include './components/nav.php';
  ?>
    <div class="form-container">
        <h2 class="fw-bold text-success text-center">Membership Application Form</h2>
        <form action="membership.php" method="post">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" required><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>

            <input type="submit" value="Submit">
        </form>

        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zoo_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $full_name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $phone_number = $_POST['phone'] ?? '';
            $address = $_POST['address'] ?? '';

            // Hash the password before storing
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and bind - Ensure that column names match your database table
            $stmt = $conn->prepare("INSERT INTO members (full_name, email, password, phone_number, address) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $full_name, $email, $hashed_password, $phone_number, $address);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<p class='text-success text-center'>New record created successfully</p>";
            } else {
                echo "<p class='text-danger text-center'>Error: " . $stmt->error . "</p>";
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
        }
        ?>
    </div>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
