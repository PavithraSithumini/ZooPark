<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'volunteer') {
    header('Location: login.php');
    exit;
}

$host = 'localhost';
$dbname = 'zoo_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $animal_name = $_POST['animal_name'];
        $animal_description = $_POST['animal_description'];
        $animal_image = $_FILES['animal_image']['name'];

        // Save image to the 'uploads' directory
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($animal_image);
        move_uploaded_file($_FILES['animal_image']['tmp_name'], $target_file);

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO animals (name, description, image) VALUES (:name, :description, :image)");
        $stmt->bindParam(':name', $animal_name);
        $stmt->bindParam(':description', $animal_description);
        $stmt->bindParam(':image', $target_file);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Animal added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to add animal!</div>";
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
    <title>Add Animal</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <nav>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px;">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"></svg>
                <span class="text-white fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./add_animal.php" class="nav-link active text-white" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="30"></svg>
                        Add Animal
                    </a>
                </li>
                <li>
                    <a href="./login.php" class="nav-link link-body-emphasis text-white">
                        <svg class="bi pe-none me-2" width="16" height="30"></svg>
                        Sign Out
                    </a>
                </li>
            </ul>
            <hr>
    </nav>
    <div class="container mt-5 bg-white center">
        <h1>Add a New Animal</h1>
        <form action="add_animal.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="animal_name" class="form-label">Animal Name</label>
                <input type="text" class="form-control" id="animal_name" name="animal_name" required>
            </div>
            <div class="mb-3">
                <label for="animal_description" class="form-label">Animal Description</label>
                <textarea class="form-control" id="animal_description" name="animal_description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="animal_image" class="form-label">Animal Image</label>
                <input type="file" class="form-control" id="animal_image" name="animal_image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Animal</button>
        </form>
    </div>
</body>

</html>