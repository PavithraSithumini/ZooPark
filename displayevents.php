<?php
// Database connection
$host = 'localhost';
$dbname = 'zoo_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch events from the "events" table
    $stmt = $conn->query("SELECT * FROM events");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Connection failed: " . $e->getMessage() . "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Events</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
</head>

<body>
    <?php include './components/nav.php'; ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <?php if (!empty($events)): ?> <!-- Check if events is not empty -->
                <?php foreach ($events as $event): ?>
                    <div class="col-md-4">
                        <div class="card mb-4" style="width: 18rem;">
                        <img src="<?= htmlspecialchars($event['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($event['name']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($event['name']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($event['description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p>No events found</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include './components/footer.php'; ?>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>