<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT users.* FROM blocked_users 
            INNER JOIN users ON blocked_users.blocked_id = users.unique_id 
            WHERE blocked_users.blocker_id = {$outgoing_id} 
            AND (users.fname LIKE '%{$searchTerm}%' OR users.lname LIKE '%{$searchTerm}%')";
    
    $output = "";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        include_once "blocked_data.php";
    } else {
        $output .= 'No blocked user found related to your search term';
    }
    
    echo $output;
?>
