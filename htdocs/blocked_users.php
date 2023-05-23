<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
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
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <div class="actions">
        <a href="profile.php" class="logout">Profile</a>
        <a href="#" class="logout" onclick="location.href='users.php';" style="margin-left: 2px;">Back</a>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </div>
      <style>
          .users header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          }
        
          .users header .content {
          display: flex;
          align-items: center;
          }

          .users header .actions {
          display: flex;
          flex-direction: column;
          align-items: flex-end;
          }

          .users header .logout {
          margin-top: 5px;
          }

          .users header .logout {
          display: block;
          background: #333;
          color: #fff;
          outline: none;
          border: none;
          padding: 7px 15px;
          text-decoration: none;
          border-radius: 5px;
          font-size: 17px;
          cursor: pointer;
          transition: background-color 0.3s;
          width: 100px;
          text-align: center;
          }

          .users header .logout:hover,
          .users header .logout:focus {
            background: #555;
          }
          
        </style>
      </header>
      <div class="search">
        <span class="text">Select a blocked user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>

  <script src="javascript/blocked_users.js"></script>

</body>
</html>
