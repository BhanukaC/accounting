<?php session_start(); ?>
<?php include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <script src="purchase.js"></script>
    <title>Purchase Return Journal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
   <nav class="navbar navbar-dark  navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="index.html"><img src="logo.jpeg" alt="" width="50px" style="margin-left: 10px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.html">Team</a>
                </li>

            </ul>
        </div>
    </nav>

    <section style="margin-top: 2rem;margin-bottom: 80px;">
        <h1>Purchase Return Journal</h1>
<table class="data-table">
		
		<thead>
			<tr>
				<th  rowspan="2">Date</th>
				<th  rowspan="2">Debit Note Number</th>
				<th  rowspan="2">Supplier</th>
                <th colspan="5">Description of goods</th>
				
				<th  rowspan="2">Total Value</th>
				
				
			</tr>
            <tr>
                <th>Description</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Value</th>
				<th>Trade Discount</th>
            </tr>
		</thead>
		<tbody>
        
        <?php 
            
            $query = "SELECT * FROM purchase_return_journal order by db_num asc ";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
                $date=$row["date"];
                $invoice=$row["db_num"];
                $supplier=$row["supplier"];
                $description=$row["description"];
                $qty=$row["qty"];
                $price=$row["unit_price"];
                $val=$row["val"];
                $discount=$row["trade_discount"];
                $tot=$row["tot"];
               
                echo "<tr>";
                echo "<td>$date</td>";
                echo "<td>$invoice</td>";
                echo "<td>$supplier</td>";
                echo "<td>$description</td>";
                echo "<td>$qty</td>";
				echo "<td>$price</td>";
				echo "<td>$val</td>";
				echo "<td>$discount</td>";
				echo "<td>$tot</td>";
			
                echo "</tr>";
             }
         }
        ?>
        
    </section>
    <div class="footer bg-dark">
        <p>© Copyright 2021 Auditaholic</p>
    </div>

</body>

</html>