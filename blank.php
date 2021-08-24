
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;TWO PAGE</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="#">Report Bug</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="admin.php"><i class="fa fa-desktop "></i>Main Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Free Link</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table "></i>Table Examples</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blankC.php"><i class="fa fa-edit "></i>New Category</a>
                    </li>
                    <li>
                        <a href="blank.php"><i class="fa fa-table "></i>New Product</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-qrcode "></i>Logout</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Adding product</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <?php
                include("connection.php");

                if(isset($_POST['submit'])) {
                    $name = $_POST['Name'];
                    $qty = $_POST['Qty'];
                    $price = $_POST['Price'];
                    $sale = $_POST['Sale'];
                    $cat = $_POST['cat'];
                    $war = $_POST['war'];
                    $dc = $_POST['dc'];
                    $MN = $_POST['mn'];

                    if($qty == " " || $price == " " || $name == " " || $cat == " " || $MN == " " ) {
                        echo "All fields should be filled. Either one or many fields are empty.";
                        echo "<br/>";
                        echo "<a href='blank.php'>Go back</a>";
                    }
                    else {
                        $result = mysqli_query($mysqli, "INSERT INTO product_registration(p_name, p_quantity, p_cost, p_discount, p_mid, p_warranty, p_description, p_modelnumber) VALUES('$name', '$qty','$price', '$sale', '$cat', '$war', '$dc','$MN')");

                        echo "Registration successfully";
                        echo "<br/>";
                        echo "<a href='blank.php'>Add product again</a>";
                    }
                } else {}
                ?>
                <form name="form1" method="post" action="">
                    <table width="75%" border="0">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="Name"></td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td><input type="number" name="Qty"></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input type="number" name="Price"></td>
                        </tr>
                        <tr>
                            <td>Sale</td>
                            <td><input type="number" name="Sale"></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><input type="number" name="cat"></td>
                        </tr>
                        <tr>
                            <td>Warranty</td>
                            <td><input type="text" name="war"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><input type="text" name="dc"></td>
                        </tr>
                        <tr>
                            <td>Model Number</td>
                            <td><input type="number" name="mn"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="submit"  value="Submit"></td>
                        </tr>
                    </table>
                </form>
                <hr />
                <h2>Blank Page</h2>
                <!-- /. ROW  -->
    </div>


            }

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
