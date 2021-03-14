<?php session_start(); ?>
<?php include "connection.php";


if(isset($_POST['submit'])) {

    $date=$_POST["date"];
    $invoice=$_POST["invoice"];
    $supplier=$_POST["name"];
    $description=$_POST["desc"];
    $qty=$_POST["qty"];
    $price=$_POST["unit_price"];
    $val=$_POST["val"];
    $discount=$_POST["t_discount"];
    $tot=$_POST["fin"];
	
    $checkqsn = "SELECT * FROM purchase_return_journal where db_num='$invoice'";
	$runcheck = mysqli_query($conn , $checkqsn) or die(mysqli_error($conn));
	$qno = mysqli_num_rows($runcheck);

	if($qno==0){

	$query = "INSERT INTO purchase_return_journal VALUES('$invoice','$date','$supplier','$description','$qty','$price','$val','$discount','$tot')" ;
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "<script>alert('successfully added'); </script> " ;
	}
	else {
		echo"<script>alert('error, try again!'); </script> " ;
	}
	}else
	{
		echo"<script>alert('Debit Note number already found.Can not duplicate !'); </script> " ;
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <script src="purchase.js"></script>
    <title>Purchase Return Journal</title>
</head>

<body>
    <nav class="navbar navbar-dark  navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="index.html"><img src="logo.jpeg" alt="" width="50px" style="margin-left: 10px;" href="index.html"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Team</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <section style="margin-top: 2rem;margin-bottom: 80px;">
        <h1>Input data of the the Debit Note</h1>

        <form method="POST" action="">

            <label>Date</label>
            <br>
            <input type="date" name="date" id="date" required>
            <br>
            <label>Debit Note Number</label>
            <br>
            <input type="text" name="invoice" id="invoice">
            <br>
            <label>Supplier</label>
            <br>
            <input type="text" name="name" id="name" required>
            <br>
            <label>Description</label>
            <br>
            <input type="text" name="desc" id="desc">
            <br>
            <label>Quantity</label>
            <br>
            <input type="number" name="qty" id="qty" required value="0" onchange="calvalue()">
            <br>
            <label>Unit Price</label>
            <br>
            <input type="number" name="unit_price" id="unit_price" required value="0" onchange="calvalue()">
            <br>
            <label>Value</label>
            <br>
            <input type="number" name="val" id="value" required  value="0">
            <br>
            <label>Trade Discount Percentage</label>
            <br>
            <input type="number" name="t_discount" id="t_discount" required value="0" onchange="caltot()">
            <br>
            <label>Total Value</label>
            <br>
            <input type="number" name="fin" id="final" required >
            <br><br>

            <input type="submit" name="submit" value="Add to Journal" id="su-button">
            <div id="error" class="hide"></div>
        </form>
    </section>
    <div class="footer bg-dark">
        <p>© Copyright 2021 Auditaholic</p>
    </div>

</body>

</html>