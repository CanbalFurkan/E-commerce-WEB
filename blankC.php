
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
                    <h2>Creating a New Category</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <?php
            include("connection.php");

            if(isset($_POST['submit'])) {
                $name = $_POST['Name'];
                $pName = $_POST['Parent'];

                if($name == " ") {
                    echo "Category name can not be empty.";
                    echo "<br/>";
                    echo "<a href='blank.php'>Go back</a>";
                }
                else {

                    $sql ="INSERT INTO categories(c_name, c_bid) VALUES('$name', 0)";
                    if(mysqli_query($mysqli,$sql )){
                        $last_id = mysqli_insert_id($mysqli);
                    }

                    if($pName == "-1")
                        mysqli_query($mysqli,"UPDATE categories SET c_bid=$last_id WHERE c_mid = $last_id");
                    else
                        mysqli_query($mysqli,"UPDATE categories SET c_bid=$pName WHERE c_mid = $last_id");
                    ?>
                    <script>alert("Registration successfully")</script>
                    <?php
                }
            } else {}
            ?>
            <form name="form1" method="post" action="">
                <table width="75%" border="0">
                    <tr>
                        <td>Category Name</td>
                        <td><input type="text" name="Name"></td>
                    </tr>

                    <tr>
                            <p>Please select parent category:</p>
                            <?php

                            $sqlll		= "SELECT * FROM categories WHERE c_bid = c_mid";
                            $resultrad = mysqli_query($mysqli , $sqlll);

                            while($row = mysqli_fetch_assoc($resultrad))
                            {
                                ?><input type="radio" name="Parent" value="<?php

                            $parCatName = $row['c_name'];
                            $parID = $row['c_bid'];
                            echo "$parID";

                            ?>"> <?php
                                echo "$parCatName";
                                ?><br><?php
                            }
                            ?>
                            <input type="radio" name="Parent" value="-1" checked="checked"> No Parent Category<br>
                    </tr>
                    <hr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit"  value="Submit"></td>
                    </tr>
                </table>
            </form>
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
