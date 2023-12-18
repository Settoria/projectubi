<html lang="en">

<?php
include ('dbconnect.inc.php');

if (isset($_POST['submitted'])) {
    if ($_POST['username']) {
        $username = $_POST['username'];
    } else {
        $username = FALSE;
        echo "<p>Please enter a valid Username</p>";
    }
    if ($_POST['password']) {
        $password = $_POST['password'];
    } else {
        $password = FALSE;
        echo "<p>Please enter a valid password</p>";
    }
    if ($_POST['password']) {
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        //$salt = bin2hex(random_bytes(16)); - generates random salt
    }
    
}

$sql = "SELECT * FROM userdata WHERE username = ?";
$stmt = $dbconnect->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $is_password_valid = password_verify($password, $row["password"]); //hash
        if ($is_password_valid) {
            $name_cookie = $row["username"];
            setcookie("name", $name_cookie, time() + (180), "/");
            header("location: admin.php");
        }
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="core.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link rel="icon" type="icon/png" href="images/logo1.png">
    <style>
        header {
            background-image: url(images/wide_banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <title> Ubiquitec || International </title>
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
</head>

<body>
<nav class="sticky">
    <div class="topnav" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="support.php">Support</a>
        <a href="contact.php">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i></a>
        <div class="login">
            <form method="post" action="index.php">
                <input name="username" type="text" placeholder="Enter Username">
                <input name="password" type="text" placeholder="Enter Password">
                <input name="submitted" type="submit" value="login">
            </form>
        </div>
    </div>
</nav>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

</script>
<header>
    <h1 class="slogan-top">for you</h1>
    <h1 class="slogan-mid">we're keeping an eye out,</h1>
    <h1 class="slogan-bottom">Ubiquitec,</h1>
    <div class="clear"></div>
</header>

<article>
    <h1 style="margin-top: 6vh; margin-bottom: 5vh">Inside Ubiquitec</h1>

    <div class="product_block">
        <!--this is a comment showing the first content row-->

        <div class="product_card" style="margin-left:1%;">
            <h5>Technology At Your Fingertips</h5>
            <img src="images/world_at_finger_tips.jpeg" height="" width="100%" alt="HTML Image">
            <p>Advanced technologies available whenever, and wherever you go</p>
        </div>

        <div class="product_card">
            <h5>Always Connected</h5>
            <img src="images/iot-city.jpg" height="" width="100%" alt="CSS Image">
            <p>In this day and age, always be connected to a wide range of IP enabled devices </p>
        </div>
        <div class="product_card">
            <h5>Here To Listen</h5>
            <img src="images/watching.png" height="" width="100%" alt="CSS Image">
            <p>To ensure that we offer the Best service, our devices all come equiped with audio receivers. </p>
        </div>
        <div class="product_card">
            <h5>impenetrable</h5>
            <img src="images/padlock_02.jpg" height="" width="100%" alt="JS Image">
            <p>All developed systems come with our security guarentee, no one but us can access your personal data.</p>
        </div>
    </div>
    <div class="clear"></div>
</article>


<footer style="color: #ffffff;text-align: center;">
    &copy;Ubiquitec International


</footer>
</body>

</html>