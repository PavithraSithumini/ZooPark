<?php
include("./BO/Events.php");
session_start();

$Events = new Events();
$events = $Events->get();

$selectedEvents = null;

if (isset($_POST["btnEdit"])) {
    $eventId = $_POST["btnEdit"];
    $selectedEvent = $Events->getId($eventId); // Get event by ID
    if (isset($Events[$eventId])) {
        $selectedEvents = $Events[$eventId];
    } else {
        echo "Product not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Events</title>
</head>
<body>
    <?php include './header.php'; ?>
    <div class="center">
        <header>
            <h1>Manage Events</h1>
            <nav></nav>
            <aside></aside>
        </header>
        <form method="POST" enctype="multipart/form-data">
            <ul style="list-style-type: none;">
                <li><label for="">Events Id</label></li>
                <li>
                    <input type="number" name="txtid" readonly value="<?php  
                    if ($selectedEvents) {
                        echo htmlspecialchars($selectedEvents->getid());
                    }
                    ?>">
                </li>
                <li><label for="">Name</label></li>
                <li>
                    <input type="text" name="txtName" required value="<?php  
                    if ($selectedEvents) {
                        echo htmlspecialchars($selectedEvents->getName());
                    }
                    ?>">
                
                
                </li>
                <li><label for="">Description</label></li>
                <li>
                    <textarea name="txtDes"><?php
                    if ($selectedEvents) {
                        echo htmlspecialchars($selectedEvents->getDescription());
                    }
                    ?></textarea>
                
                <li><label for="">Image</label></li>
                <li>
                    <?php if ($selectedEvents): ?>
                        <img src="<?php echo htmlspecialchars($selectedEvents->getImage()); ?>" alt="Events-image" width="100px">
                    <?php endif; ?>
                    <input type="file" name="txtImage" <?php echo $selectedEvents ? '' : 'required'; ?>>
                </li>
                
                <li>
                    <input type="submit" value="Update" name="btnUpdate">
                    <input type="submit" value="Delete" name="btnDel">
                </li>
            </ul>
        </form>
    </div>
    <?php 
    if (isset($_POST["btnUpdate"])) {
        $Events = new Events();
        $Events -> setid($_POST["txtid"]);
        $Events -> setName($_POST["txtName"]);
        $Events -> setDescription($_POST["txtDes"]);
        $Events->update();

        echo "Events updated!";

        if($_FILES['txtImage']['size'] != 0){
            $id = $Events -> getid();
            $info = new SplFileInfo($_FILES["txtImage"]["name"]);
            $newName = './images/'.$id. '.'.$info->getExtension();
            $Events->setImage($newName);
            $Events->setid($id);
            move_uploaded_file($_FILES["txtImage"]["tmp_name"],$newName);
            $product->updateImage();
            echo "Image updated!";
        }
    }elseif(isset($_POST["btnDel"])){
        $Events = new Events();
        $Events -> setid($_POST["txtCode"]);      
        $Events->del();  
        echo "Events deleted!";
    }
    ?>
</body>
</html>
