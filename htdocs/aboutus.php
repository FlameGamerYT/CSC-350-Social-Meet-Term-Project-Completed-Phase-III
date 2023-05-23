<?php include_once "header.php"; ?>
<style>
  .about-section {
    line-height: 1.5;
    margin-bottom: 20px;
  }
  .about-section h2 {
    margin-bottom: 10px;
  }
  .about-section ul {
    list-style: none;
    padding-left: 0;
  }
  .about-section li:before {
    content: "•";
    margin-right: 5px;
  }
  .logout{
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
  .logout:hover,
  .logout:focus {
    background: #555;
  }

</style>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>About Social Meet</header>
      <div class="about-section">
        <h2>Our Mission</h2>
        <p>Social Meet is a social networking platform that aims to connect individuals and provide them with a platform to make friends, socialize, and build meaningful relationships. Our platform provides a safe and secure space for individuals to connect with people from all over the world and engage in various activities and events.</p>
      </div>
      <div class="about-section">
        <h2>Our Approach</h2>
        <p>We believe that one of the biggest limiting factors for meeting new people are all the algorithms and “preferences” that people choose for themselves. That’s why with Social Meet you only have the person’s name and profile picture! This way you get to have the experience of actually meeting new people and being introduced to new topics and ideas that you might enjoy!</p>
      </div>
      <div class="about-section">
        <h2>Our Team</h2>
        <p>Our project was created by students at the Borough of Manhattan Community College:</p><br>
        <ul>
          <li>Farouk Abdel Rahman - (347) 607-2649 - farouk.abdelrahman@stu.bmcc.cuny.edu - Completed all the coding on the website</li><br>
          <li>Andy Zhen - (347) 885-4917 - zhenandy059@gmail.com - Completed the presentation portion of the project</li>
        </ul>
      </div>
      <center>
      <div class="field button"><a href="login.php" class="logout">Back to Login</a></div>
      </center>
    </section>
  </div>
</body>
</html>
