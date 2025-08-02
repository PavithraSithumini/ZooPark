<?php

require("connection.php");

class events
{
    private $id;
    private $name;
    private $description;
    private $image;


    //set
    public function setid($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    //get
    public function getid()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImage()
    {
        return $this->image;
    }

    //product add method
    public function add()
    {
        try {
            $conn = connection::getConnection();
            $query = "INSERT INTO `events`(`name`, `Description`, `Image`) VALUES (?,?,?)";
            $st =  $conn->prepare($query);
            $st->bindParam(1, $this->name, PDO::PARAM_STR);
            $st->bindParam(2, $this->description, PDO::PARAM_STR);
            $st->bindParam(3, $this->image, PDO::PARAM_STR);
            if ($st->execute()) {
                return $conn->lastInsertId();
            } else {
                return -1;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    //event update method
    public function update()
    {
        try {
            $conn = connection::getConnection();
            $query = "UPDATE `events` SET `name`=?,`Description`=?, WHERE id=?";
            $st =  $conn->prepare($query);
            $st->bindParam(1, $this->name, PDO::PARAM_STR);
            $st->bindParam(2, $this->description, PDO::PARAM_STR);
            $st->bindParam(3, $this->id, PDO::PARAM_INT);
            return $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    //event delete method
    public function del()
    {
        try {
            $conn = connection::getConnection();
            $query = "DELETE FROM `events` WHERE id=?";
            $st =  $conn->prepare($query);
            $st->bindParam(1, $this->id, PDO::PARAM_INT);
            return $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    // event get method
    public function get()
    {
        try {
            $conn = connection::getConnection();

            // Fetch events from the database
            $query = "SELECT id, name, Description, Image FROM events";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $Events = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array

            // If no events found, initialize an empty array
            if (!$Events) {
                $Events = [];
            }

            // Initialize an array to hold event objects
            $events = array();

            // Loop through each event and create an object for each
            foreach ($Events as $item) {
                $event = new events(); // Create a new instance of the events class
                $event->setid($item['id']); // Use column names from the database
                $event->setName($item['name']);
                $event->setDescription($item['Description']);
                $event->setImage($item['Image']);

                // Add each event object to the events array
                array_push($events, $event);
            }

            return $events; // Return the array of event objects

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array if an error occurs
        }
    }



    //event image method
    public function updateImage()
    {
        try {
            $conn = connection::getConnection();
            $query = "UPDATE events SET Image=? WHERE id=?";
            $st =  $conn->prepare($query);
            $st->bindParam(1, $this->image, PDO::PARAM_STR);
            $st->bindParam(2, $this->id, PDO::PARAM_INT);
            $st->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }
}

