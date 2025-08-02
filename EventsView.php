<?php
include("./BO/Events.php");
session_start();

$Events = new Events();
$events = $Events->get(); // Fetch all events from the DB
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <?php include './header.php'; ?>
    <div class="container mt-1 mb-1">
        <h1 class="text-white center">Event List</h1>
        <table class="table table-bordered center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($events) && count($events) > 0) {
                    foreach ($events as $event) {
                        echo '
                        <tr>
                            <td>' . htmlspecialchars($event->getid()) . '</td>
                            <td>' . htmlspecialchars($event->getName()) . '</td>
                            <td>' . htmlspecialchars($event->getDescription()) . '</td>
                            <td><img src="' . htmlspecialchars($event->getImage()) . '" width="100px"></td>
                            <td>
                                <form action="EventsUpdate.php" method="POST">
                                    <button type="submit" name="btnEdit" value="' . $event->getid() . '" class="btn btn-primary"><a href="./EventsUpdate.php" class="text-white">Edit</a></button>
                                </form>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No events available.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
