<?php

session_start();
include_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "UPDATE users SET img='pic".$id.".jpg' WHERE unique_id={$_SESSION['unique_id']}";
    $update_query = mysqli_query($conn, "UPDATE users SET img='pic".$id.".jpg' WHERE unique_id={$_SESSION['unique_id']}");

    if ($update_query) {
        header("location: ../profile.php");
    } else {
        echo "Something went wrong. Please try again!";
    }
}else{
    echo "error";
}
?>
