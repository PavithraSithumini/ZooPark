<?php
$host = 'localhost';
$dbname = 'zoo_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM animals");
    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Connection failed: " . $e->getMessage() . "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
</head>
<body>
    <?php include './components/nav.php'; ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <?php foreach ($animals as $animal): ?>
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?php echo $animal['image']; ?>" class="card-img-top" alt="<?php echo $animal['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['name']; ?></h5>
                        <p class="card-text"><?php echo $animal['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include './components/footer.php'; ?>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
