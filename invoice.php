<?php include_once("connection.php"); session_start();

$userid=$_SESSION['uid'];

 ?>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            Invoice #:
                            <?php
                            Due: $today = date("d/m/Y");
                            echo $today; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Falan Filan<br>
                            Sabanci<br>
                            Sunnyville, CA 12345
                        </td>

                        <td>
                           <?php $result = mysqli_query($mysqli, "SELECT * FROM customers WHERE customer_id='$userid'");?>
                            <?php
                    while($res = mysqli_fetch_array($result)) { ?>



                        <?php echo $res['customer_name']; echo " "; echo $res['customer_surname']  ?>  <br>
                       <?php  }   ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
                Check #
            </td>
        </tr>

        <tr class="details">
            <td>
                Check
            </td>

            <td>
                1000
            </td>
        </tr>

        <tr class="heading">
            <td>
                Item
            </td>


            <td>
                Price
            </td>
        </tr>
       <?php
       $totalcost=0;
       $result = mysqli_query($mysqli, "SELECT * FROM cart WHERE customer_id='$userid'");

        while($res = mysqli_fetch_array($result)) {
?>
        <tr class="item">

            <td>
                <?php $result2 = mysqli_query($mysqli, "SELECT * FROM product_registration WHERE p_id='$res[p_id]'");
                while($res2 = mysqli_fetch_array($result2)) {echo $res2['p_name']; echo" x "; echo $res['quantity']; } ?>
            </td>


            <td>
                <?php $result3 = mysqli_query($mysqli, "SELECT * FROM product_registration WHERE p_id='$res[p_id]'");
                while($res3 = mysqli_fetch_array($result3)) { $totalcost=$totalcost+($res3['p_cost']*$res['quantity']); echo $res3['p_cost']*$res['quantity']; } ?>
            </td>
        </tr>

<?php  } ?>

        <tr class="total">
            <td></td>

            <td>
                Total: <?php echo $totalcost; ?>    $
            </td>
        </tr>
    </table>
</div>
</body>
<a href="https://pdfmyurl.com/saveaspdf">Save this page as PDF</a>
<a href="index.php">Return Main Page</a>
<?php       $result = mysqli_query($mysqli, "SELECT * FROM cart WHERE customer_id='$userid'");

while($res=mysqli_fetch_array($result)) {
    $pi=$res['p_id'];
    $cq=$res['quantity'];
    $result2 = mysqli_query($mysqli, "SELECT * FROM cart WHERE customer_id='$userid'");
    $res2=mysqli_fetch_array($result2);
    $qreal=$res2['quantity'];
    $qreal=$qreal-$cq;

    $del = mysqli_query($mysqli, "UPDATE product_registration SET p_quantity='$qreal' WHERE p_id='$pi'");


}

$del = mysqli_query($mysqli, "DELETE FROM cart WHERE customer_id='$userid'"); ?>
</html>