<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>
<body>
<script>

    function choose(id) {
        document.getElementById("default").value = id;
        for(var i=1;i<8;i++){
            document.getElementById("default" + i).style.border = "none"
        }
        document.getElementById("default" + id).style.border = "2px solid #000"

    }
</script>
<div class="wrapper">
    <section class="form signup">
        <header>Social Meet</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First name" required>
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last name" required>
                </div>
            </div>
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter new password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label>Select Image</label>
                <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
            </div>
            <div class="piclist">
                <center>
                <input type="hidden" id="default" name="default">
                <a href="javascript:choose(1)"><img  id="default1" src="php/images/pic1.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(2)"><img  id="default2" src="php/images/pic2.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(3)"><img  id="default3" src="php/images/pic3.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(4)"><img   id="default4" src="php/images/pic4.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(5)"><img  id="default5" src="php/images/pic5.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(6)"><img  id="default6" src="php/images/pic6.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(7)"><img  id="default7" src="php/images/pic7.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(8)"><img  id="default8" src="php/images/pic8.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(9)"><img  id="default9" src="php/images/pic9.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                <a  href="javascript:choose(10)"><img  id="default10" src="php/images/pic10.jpg" width="70" height="70" object-fit="cover" border-radius="50%"></a>
                </center>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
</div>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>

</body>
</html>
