<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licens  es/by/3.0/
-->
<?php
include("connection.php");
session_start();

$uidInUse = $_SESSION['uid'];
$result = mysqli_query($mysqli, "SELECT * FROM customers WHERE customer_id=' $uidInUse'");
$userRow = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In & Sign Up :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="product.php">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="checkout.php" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="View your cart" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) :{?>
                                <li><a href="profilePage.php">User Page</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            <?php } ?>

                            <?php else: { ?>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="login.php">Sign Up</a></li>
                            <?php } ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="mail.html">Contact Us</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="index.php"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="events.html">Events</a><i>/</i></li>
                <li><a href="about.html">About Us</a><i>/</i></li>
                <li><a href="product.php">Best Deals</a><i>/</i></li>
                <li><a href="services.html">Services</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
            <li>Profile Page</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
            $sql 		= "SELECT * FROM categories WHERE c_bid = c_mid";
            $result = mysqli_query($mysqli , $sql);

            while($row = mysqli_fetch_assoc($result))
            {

            $hold = $row['c_mid'];

            ?>

            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li class="dropdown mega-dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php    echo $row['c_name'];?>
                            <span class="caret"></span></a>
                        </a>



                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <?php

                                    $get_category = "SELECT * FROM categories WHERE c_bid = $hold AND c_bid != c_mid";
                                    $get_query 		= mysqli_query($mysqli , $get_category);

                                    while($bids = mysqli_fetch_assoc($get_query))
                                    {
                                        ?>
                                        <li>
                                            <a href='notebooks.php?id=<?php echo $bids['c_mid']?>'><?php echo $bids['c_name'];?></a>
                                        </li>
                                        <?php
                                    }

                                    ?>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- update info -->

        <?php
        if(isset($_POST['update']))
        {

        $name = $_POST['name'];
        $sur = $_POST['surname'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        // checking empty fields
        if(empty($name) || (empty($sur)) || empty($password) || empty($address) || empty($email)) {

        if(empty($name)) {
        echo "<font color='red'>Name field is empty. An account needs to have a name.</font><br/>";
        }

        if(empty($sur)) {
            echo "<font color='red'>Surname field is empty. An account needs to have a surname.</font><br/>";
        }

        if(empty($password)) {
        echo "<font color='red'>Password field is empty. An account needs to have a password.</font><br/>";
        }

        if(empty($address)) {
        echo "<font color='red'>Adress field is empty. It is required in order to make a purchase.</font><br/>";
        }
        if(empty($email)) {
        echo "<font color='red'>Email field is empty. An account needs to have an email.</font><br/>";
        }
        }
        else {
            $result = mysqli_query($mysqli, "UPDATE customers SET customer_name='$name', customer_surname='$sur', customer_password='$password', customer_home='$address', customer_mail='$email' WHERE customer_id=$uidInUse");
            $result = mysqli_query($mysqli, "SELECT * FROM customers WHERE customer_id=' $uidInUse'");
            $userRow = mysqli_fetch_assoc($result);
        }
        }
        ?>



        <form name="form1" method="post" action="#">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $userRow['customer_name'];?>"></td>
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><input type="text" name="surname" value="<?php echo $userRow['customer_surname'];?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $userRow['customer_mail'];?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?php echo $userRow['customer_password'];?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" value="<?php echo $userRow['customer_home'];?>"></td>
                </tr>
                <tr>

                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>





        <!-- //update info -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
<div class="newsletter-top-serv-btm">
    <div class="container">
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <h3>Nam libero tempore</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </div>
            <h3>officiis debitis aut rerum</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <h3>eveniet ut et voluptates</h3>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                saepe eveniet ut et voluptates repudiandae sint et.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter-top-serv-btm -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_left">
            <h3>sign up for our newsletter</h3>
        </div>
        <div class="w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="subscribe now">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 w3_footer_grid">
            <h3>information</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="events.html">Events</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="product.php">Best Deals</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="short-codes.html">Short Codes</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>policy info</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="faqs.html">FAQ</a></li>
                <li><a href="privacy.html">privacy policy</a></li>
                <li><a href="privacy.html">terms of use</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>what in stores</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="pet.html">Pet Food</a></li>
                <li><a href="frozen.html">Frozen Snacks</a></li>
                <li><a href="kitchen.html">Kitchen</a></li>
                <li><a href="product.php">Branded Foods</a></li>
                <li><a href="household.html">Households</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>twitter posts</h3>
            <ul class="w3_footer_grid_list1">
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>100% secure payments</h4>
                    <img src="images/card.png" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>connect with us</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_footer_copy">
            <p>?? 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>