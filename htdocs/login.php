<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <style>
  .learnmore{
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
    text-align: center;
  }
  .learnmore:hover,
  .learnmore:focus {
    background: #555;
  }

  </style>
  <div>
  <div class="wrapper">
    <section class="form login">
      <header>Social Meet</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  <br>
  <div class="wrapper">
  <section class="form login">
    <header style="text-align:center">About Social Meet:</header>
    <p style="font-size:14px">In today's hyper-connected world, it can be challenging to stay in touch with loved ones and meet new people. That's where Social Meet comes in. Our social media platform, created by students at the Borough of Manhattan Community College, helps you connect with individuals from all over the world. With no algorithms or preferences limiting your interactions, you can discover new interests and expand your horizons. Join us and start building meaningful relationships today.</p>
    <div class="field button"><a href="aboutus.php" class="learnmore">Learn More Here</a></div>
  </section>
</div>
</div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
