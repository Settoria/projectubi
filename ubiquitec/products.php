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
            background-image: url(images/products-banner.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

    <title> Ubiquitec || International </title>
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
                <form method="post" action="projects.php">
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
        <h1 class="slogan-top">to help us</h1>
        <h1 class="slogan-mid">designed for you,</h1>
        <h1 class="slogan-bottom">Our Products,</h1>
        <div class="clear"></div>
    </header>

    <article>
        <h1 style="margin-top: 6vh; margin-bottom: 5vh;">Products for a better home</h1>

        <div class="product_block">
            <!--this is a comment showing the first content row-->

            <div class="product_card" style="margin-left:1%;">
                <h5>Smart Home integration</h5>
                <img src="images/product_8.jpg" height="" width="100%" alt="HTML Image">
                <p>Your home at your fingertips, our full smart home integration package allows full control of your home, from utilities, to your wellbeing, ubiqutech has you covered. </p>
            </div>

            <div class="product_card">
                <h5>AI Assistant - UBI</h5>
                <img src="images/product_ubi.jpg" height="" width="100%" alt="CSS Image">
                <p>You're busy, we get that, why not let Us help, UBI is a revolutionary designed Artifical intelligence, created to fully intergrate with all ubiqutec products, and help run all areas of your life.</p>
            </div>
            <div class="product_card">
                <h5>home camera - smart eyes</h5>
                <img src="images/product_6.jpg" height="" width="100%" alt="CSS Image">
                <p>Smart Eyes camaeras for both internal and external home use, allowing 24 hour surveillance via your ubiquitec account, helping US, keep you safe, at all times. </p>
            </div>
            <div class="product_card">
                <h5>Ubi HUB</h5>
                <img src="images/product_11.jpg" height="" width="100%" alt="JS Image">
                <p>communicate with you UBI assistant by simply saying "hey UBI", the UbI hub will always listen to your needs, as the ears of the UBI assitant.</p>
            </div>
        </div>
        <div class="clear"></div>
    </article>

    <div class="wide_container">
        <section>
            <h1 style="margin-top: 6vh; margin-bottom: 5vh; color:#ffffff;">Find products and services in the Ubiquitec marketplace</h1>
            <div class="search_box">
                <form action="under_development.html">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What may we help you find?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>


            <h5>Technologies</h5>
            <ul class="section_links">
                <li><a href="under_development.html">Analytics</a> </li>
                <li><a href="under_development.html">Cloud Computing</a></li>
                <li><a href="under_development.html">IT Management</a></li>
            </ul>
            <ul class="section_links" style="margin-left: 7%;">
                <li><a href="under_development.html">Software Development</a></li>
                <li><a href="under_development.html">Security</a></li>
                <li><a href="under_development.html">Medical IoT</a></li>
            </ul>
            <ul class="section_links">
                <li><a href="under_development.html">IT Infastructure</a></li>
                <li><a href="under_development.html">Mobile Technology</a></li>
                <li><a href="under_development.html">Artificial Technology</a></li>
            </ul>
            <div class="clear"></div>
            <h5>Business needs</h5>
            <ul class="section_links">
                <li><a href="under_development.html">Business Needs</a></li>
                <li><a href="under_development.html">Content Management</a></li>
                <li><a href="under_development.html">Collaberation</a></li>
            </ul>
            <ul class="section_links">
                <li><a href="under_development.html">Commerce</a></li>
                <li><a href="under_development.html">Human Testing</a></li>
                <li><a href="under_development.html">Marketing and Sales</a></li>
            </ul>
            <ul class="section_links">
                <li><a href="under_development.html">Finance</a></li>
                <li><a href="under_development.html">Remote Access Control</a></li>
                <li><a href="under_development.html">Supply</a></li>
                <li><a href="projects.php" hidden>Projects</a></li>
                <div class="clear"></div>
            </ul>

            <div class="product_card_lower" style="margin-left:1%;">
                <img src="images/lower_iot.jpg" height="" width="100%" alt="HTML Image">
            </div>

        </section>
    </div>
    <footer style="color: #ffffff;text-align: center;">
        &copy;Ubiquitec International</footer>
</body>

</html>
