<?php

include("db.php");

if (isset($_POST['save'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    
    $query = "INSERT INTO ticket (title, description, priority) VALUES ('$title', '$description', '$priority')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>