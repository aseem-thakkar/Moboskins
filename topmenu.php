<!DOCTYPE html>
<head>

    <title>MoboSkins</title>
    <script language="JavaScript" type="text/javascript" src="js/checkform.js"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript">
        function makeRequestObject() {
            var xmlhttp = false;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            // xmlhttp.onreadystatechange=function() {
            //     if (this.readyState==4 && this.status==200) {
            //         var ajaxCart = document.getElementById("cartcountinfo");
            //         ajaxCart.innerHTML = xmlhttp.responseText;
            //     }
            // }
            return xmlhttp;
        }

        function updateCart() {
            var xmlhttp = makeRequestObject();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var ajaxCart = document.getElementById("cartcountinfo");
                    ajaxCart.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "countcart.php", true);
            xmlhttp.send();
        }
    </script>
</head>

<!--<body>-->
<!--
    <table width="100%" cellspacing="0">
        <tr>
-->

<nav style="padding: 10px">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
    </div>
</nav>

<!---->
<!--<!-- Top navigation bar STARTS -->
<!--<nav class="navbar navbar-default">-->
<!--    <div class="container-fluid">-->
<!--        <div class="navbar-header">-->
<!--            <a class="navbar-brand" href="index.php">Online Retail Store</a>-->
<!--        </div>-->
<!--        <ul class="nav navbar-nav">-->
<!--            <li class="active"><a href="#">Home</a></li>-->
<!--            <li class="dropdown">-->
<!--                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase<span class="caret"></span></a>-->
<!--                <ul class="dropdown-menu">-->
<!--                    <li><a href="#">Products</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li><a href="#">Page 2</a></li>-->
<!--        </ul>-->
<!--        <form class="navbar-form navbar-left" method="post" action="searchitems.php">-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" placeholder="Search" name="tosearch">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default search-button">Search</button>-->
<!--        </form>-->
<!--        <ul class="nav navbar-nav navbar-right">-->
<!--            --><?php
//            if (session_status() == PHP_SESSION_NONE) {
//                session_start();
//            }
//            if (isset($_SESSION['emailaddress'])) {
//                echo "<li><a href='profile.php'>Welcome " . $_SESSION['emailaddress'] . "</a></li>";
//                echo "<li><a href=\"logout.php\">Logout</a></li>";
//            } else {
//                echo "<li><a href=\"signin.php\">Login</a></li>";
//                echo "<li><a href=\"signup.php\">Sign up</a></li>";
//            }
//
//            ?>
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->
<!---->
<!--<!-- Top navbar ENDS -->
<!--<!-- Navigation bar ENDS -->
<!---->
<!--<!---->
<!--                <tr>-->
<!--                    <td style="font-size: 35px; color: blue;">-->
<!--                        <b>Online Store</b>-->
<!--                    </td>-->
<!---->
<!--                    <td>-->
<!--                        <form method="post" action="searchitems.php">-->
<!--                            <input size="50" type="text" name="tosearch">-->
<!--                            <input type="submit" name="submit" value="Search">-->
<!--                        </form>-->
<!--                    </td>-->
<!---->
<!--                    <td>-->
<!--                        <a href="cart.php"><img style="max-width: 40px; max-height: 40px; width: auto; height: auto;" src="images/corner-logo.png"><span id="cartcountinfo"></span></a>-->
<!--                    </td>-->
<!--                </tr>-->
<!--    </table>-->
<!---->
<!--    <div class="container">-->
<!--        <nav>-->
<!--            <ul class="nav">-->
<!--                <li><a href="index.php">Home</a></li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#">Electronics</a>-->
<!--                    <ul>-->
<!--                        <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>-->
<!--                        <li><a href="itemlist.php?category=Laptops">Laptops</a></li>-->
<!--                        <li><a href="itemlist.php?category=Camera">Cameras</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#">Home &amp; Furniture</a>-->
<!--                    <ul class="large">-->
<!--                        <li><a href="index.php">Kitchen Essentials</a></li>-->
<!--                        <li><a href="index.php">Bath Essentials</a></li>-->
<!--                        <li><a href="index.php">Furniture</a></li>-->
<!--                        <li><a href="index.php">Dining &amp; Serving</a></li>-->
<!--                        <li><a href="index.php">Cookware</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="index.php">Books</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->
<!--<p></p>-->
<!---->
<!---->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->
