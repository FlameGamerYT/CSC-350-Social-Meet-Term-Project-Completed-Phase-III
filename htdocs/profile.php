<?php
session_start();
include_once 'php/config.php';

if(!isset($_SESSION['unique_id'])){
    header("location: users.php");
}

$sql = "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}

$sql = "SELECT * FROM messages WHERE incoming_msg_id = {$_SESSION['unique_id']} OR outgoing_msg_id = {$_SESSION['unique_id']} ORDER BY msg_id DESC";
$result_msgs = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .buttonprof{
        background: #333;
        color: #fff; 
        outline: none;
        border: none; 
        padding: 10px 20px; 
        font-size: 16px; 
        cursor: pointer; 
        border-radius: 5px; 
        width: 250px;
        transition: background-color 0.3s;
      }
      .buttonprof:hover,
      .buttonprof:focus{
        background:#555
      }
    </style>
</head>
<body>
<div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details" >
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
            <p>Email: <?php echo $row['email']; ?></p>
            <a href="php/change_password.php">Change your Password</a>
            <div style="text-align: left; margin:5px">
                <p>Upload a new profile picture:</p>    
                <form action="php/upload_image.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <button type="submit" name="submit">Upload</button>
                </form>
                <div class="piclist">
                    <a href="php/default_image.php?id=1"><img src="php/images/pic1.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=2"><img src="php/images/pic2.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=3"><img src="php/images/pic3.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=4"><img src="php/images/pic4.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=5"><img src="php/images/pic5.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=6"><img src="php/images/pic6.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=7"><img src="php/images/pic7.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=8"><img src="php/images/pic8.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=9"><img src="php/images/pic9.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                    <a href="php/default_image.php?id=10"><img src="php/images/pic10.jpg" width="100" height="100" object-fit="cover" border-radius="50%"></a>
                </div>
            <a href="users.php">
            <div class="field button" style="text-align: center; margin:5px">
            <input type="submit" name="submit" value="Continue to Messages" class="buttonprof">    
            </div>
            </a>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">
            <div class="field button" style="text-align: center; margin:5px">
            <input type="submit" name="submit" value="Click to Logout" class="buttonprof">    
            </div>
            </a>
        </div>
      </header>
    </section>
  </div>
</body>
</html>


