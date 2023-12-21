<!DOCTYPE html>
<html lang="en">

<?php
include("islogged.inc.php");

if (is_null($_POST['password'])) {
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
}else if (is_null($_POST["submitted"]) && $_POST["submitted"] && is_null($password)){
    $password = FALSE;
    echo '<p> please enter a password</p>';
}
include ('dbconnect.inc.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="core.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link rel="icon" type="icon/png" href="images/logo1.png">

    <title> Ubiquitec || International </title>
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">

    <style>
        header {
            background-image: url(images/banner_contact_green.png);
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>

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
    <h1 class="slogan-top"></h1>
    <h1 class="slogan-mid"></h1>
    <h1 class="slogan-bottom"></h1>
    <div class="clear"></div>
</header>

<article>
    <h1 style="margin-top: 6vh; margin-bottom: 5vh">Contact Page</h1>
    <h3>Contact ubiquitec, For all of your technical needs</h3>

    <div class="message">
      

        <form action="contact.php" method="post" enctype="multipart/form-data" name="contact">
            <table id="message">
                <tr>
                    <td>First Name</td>
                    <td><input name="first_name" type="text"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input name="last_name" type="text"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input name="email" type="text"></td>
                </tr>
                <tr>
                    <td valign="top">Your Message</td>
                    <td><textarea name="comment" col="15" rows="8"></textarea></td>
                </tr>
                <tr>
                    <td><input name="Submit" type="submit" value="Submit"/></td>

                    <td><input name="submitted" type="hidden" value="true"/></td>
                </tr>
            </table>
        </form>

    
<?php
   if (isset ($_POST['submitted'])) {
    if ($_POST['first_name']) {
        $first_name = $_POST['first_name'];
    } else {
        $first_name = FALSE;
        echo '<p>Please enter your first name! </p>';
    }
    if ($_POST['last_name']) {
        $last_name = $_POST['last_name'];
    } else {
        $last_name = false;
        echo '<p>Please enter your surname! </p>';
    }
    if ($_POST['email']) {
        $email = $_POST['email'];
    } else {
        $email = false;
        echo '<p>Please enter a valid e-mail address </p>';
    }
    if ($_POST['comment']) {
        $comment = $_POST['comment'];
    } else {
        $comment = false;
        echo '<p>Please enter your message! </p>';
    }
    include ('dbconnect.inc.php');

    $sql = "INSERT INTO contact (first_name, last_name, email, comment) VALUES('$first_name',
    '$last_name', '$email', '$comment')";

    if (mysqli_query($dbconnect, $sql)){
        echo "<h3> Thank you $name we have your message</h3>";
        echo "<h3> A message will be sent to" . $email;
    }else{
        echo "<h3>Mistakest have been made.</h3>" . $sql . mysqli_error($dbconnect);
   }

// <?php 
// if(issset($_POST['submit'])){
// $name = $_POST['name']
// $firts_name = $_POST['firts_name']
// $last_name = $_POST['last_name ']
// $emailform = $_POST['email']
// $comment = $_POST['comment']

// $mailTo = "email@email.com"; 
// $headers = "From: ".$mailForm;
// $txt = "You have recieved an e-mail form ".$name.".\n\n"

// mail($mailTo, $subject, $txt);
// header("Location: index.php?mailsend");
// }
}
?>
</div>
</article>


<footer style="color: #ffffff;text-align: center;">
    &copy;Ubiquitec International
</footer>
</body>

</html>
