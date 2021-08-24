<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
                    <a href="admin.php"><i class="fa fa-desktop "></i>Dashboard(Admin.php)</a>
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
                    <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                </li>
                <li>
                    <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Editing data<h2/>
                </div>
            </div>
            <!-- /. ROW  -->


            <?php
            // including the database connection file
            include_once("connection.php");
            if(isset($_POST['update']))
            {
                $id = $_POST['id'];

                $name = $_POST['name'];
                $qty = $_POST['qty'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];
                $cat = $_POST['category'];
                $warranty = $_POST['warranty'];
                $dd = $_POST['dd'];


                // checking empty fields
                if(empty($name) || empty($qty) || empty($price)) {

                    if(empty($name)) {
                        echo "<font color='red'>Name field is empty.</font><br/>";
                    }

                    if(empty($qty)) {
                        echo "<font color='red'>Quantity field is empty.</font><br/>";
                    }

                    if(empty($price)) {
                        echo "<font color='red'>Price field is empty.</font><br/>";
                    }
                }
                    //updating the table
                    $result = mysqli_query($mysqli, "UPDATE product_registration 
            SET p_name='$name', p_quantity='$qty', p_cost='$price', p_discount='$sale', p_mid='$cat', p_warranty='$warranty', p_description='$dd' WHERE p_id=$id");




            }
            ?>
            <?php
            //getting id from url
            $id = $_GET['id'];
            //selecting data associated with this particular id
            $result = mysqli_query($mysqli, "SELECT * FROM product_registration WHERE p_id=$id");
            while($res = mysqli_fetch_array($result))
            {
                $name = $res['p_name'];
                $qty = $res['p_quantity'];
                $price = $res['p_cost'];
                $sale=$res['p_discount'];
                $category=$res['p_mid'];
                $warranty=$res['p_warranty'];
                $dd=$res['p_description'];
            }
            ?>
            <html>
            <head>

            </head>



            <form name="form1" method="post" action=<?php echo"edit.php?id=$id" ?>>
                <table border="0">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?php echo $name;?>"></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="text" name="qty" value="<?php echo $qty;?>"></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" value="<?php echo $price;?>"></td>
                    </tr>
                    <tr>
                        <td>Sale</td>
                        <td><input type="text" name="sale" value="<?php echo $sale;?>"></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td><input type="text" name="category" value="<?php echo $category;?>"></td>
                    </tr>
                    <tr>
                        <td>Warranty</td>
                        <td><input type="text" name="warranty" value="<?php echo $warranty;?>"></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><input type="text" name="dd" value="<?php echo $dd;?>"></td>
                    </tr>


                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
            </body>
            </html>
            <hr />
            <h2>Edit Photo</h2>
            <!-- /. ROW  -->

<?php
include_once("connection.php");
if(isset($_POST["insert"]))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
if ($result = mysqli_query($mysqli, "UPDATE product_registration SET  p_image='$file'  WHERE p_id=$id"))
    echo '<script>alert("Image Inserted into Database")</script>';
}

$imgQuerry = "SELECT * FROM product_registration WHERE p_id = $id";

$sth = $mysqli->query($imgQuerry);
$imgResult = mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $imgResult['p_image'] ).'"/></br>';

?>


<tr>
    <td></td>
    <td>
        <br /><br />
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image" />
            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    </td>
</tr>



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





