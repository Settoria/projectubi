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
            background-image: url(images/support2.png);
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
                    <input name="submit" type="submit" value="login">
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


    <div class="wide_container" style="background-color: #f8f8ff">
        <section style="background-color: #f8f8ff;">
            <h1 style="margin-top: 6vh; margin-bottom: 5vh;">Welcome to ubiquitec support - Supporting your technical needs</h1>
            <div class="search_box">
                <form action="under_development.html">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="How Can We Help Today?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="support_box" style="margin-left: 4%">
                <h4>TECHNICAL DOCUMENTS</h4>
                <ul>
                    <li><a href="#support-portal">Support Portal</a></li>
                    Access technical support resources for IBM products and services
                    <li><a href="#ubi-knowledge">Ubiquitec Knowledge Centre</a></li>
                    Explore Ubiquitec's official product documentation
                    <li><a href="#blackbooks">Blackbooks</a></li>
                    Find installation and implementation experiences, solution scenarios, and "how-to" guidelines


                </ul>
            </div>
            <div class="support_box">
                <h4>DOWNLOADS</h4>
                <ul>
                    <li><a href="#fix_central">Fix Central</a></li>
                    Download fixes, updates and drivers for most products
                    <li><a href="#support-portal">Trials And Demos</a></li>
                    Try out Ubiquitec products before you buy them
                    <li><a href="#support-portal">Entitled Systems Support</a></li>
                    Obtain downloads and support for Power systems and storage software
                    <li><a href="#support-portal">Passport Advantage</a></li>
                    Manage licences, subscriptions and support for a variety of software offerings
                </ul>
            </div>

            <div class="support_box">
                <h4>MORE SUPPORT TOPICS</h4>
                <ul>
                    <li><a href="#support-portal">Customer Support</a></li>
                    Contact administrative support for items such as contracts, orders, and invoices
                    <li><a href="#support-portal">SupplierWorld Support</a></li>
                    Obtain procurement support for suppliers
                    <li><a href="#support-portal">Warranty and Licences</a></li>
                    Look up warranty and related information
                </ul>
            </div>




            <div class="product_card_lower" style="margin-left:1%;">
            </div>

        </section>
    </div>
    <footer style="color: #ffffff;text-align: center;">
        &copy;Ubiquitec International

        <a href="admin.php" hidden style="float:right; color:#ffffff; margin-top:20vh;">Admin Access</a>
    </footer>
</body>

</html>
