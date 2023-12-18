<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="core.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link rel="icon" type="icon/png" href="images/logo1.png">
    <style>
        header {
            background-image: url(images/banner_red.png);
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
            <a href="Projects.php">Projects</a>
            <a href="admin.php">Admin</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a>
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
        <h1 class="slogan-top">for us</h1>
        <h1 class="slogan-mid">to change the world,</h1>
        <h1 class="slogan-bottom">working,</h1>
        <div class="clear"></div>
    </header>

    <article>
        <h1 style="margin-top: 6vh; margin-bottom: 5vh">Active projects page</h1>
        <h3>Secret informatin relating to ubiquitec would be stored here</h3>

        <div class="dev_image"><img src="images/wide_image.jpg" height="100%" width="100%"></div>
        <div class="clear"></div>
    </article>


    <footer>
        <p>&copy;Ubiquitec International</p>
    </footer>
</body>

</html>