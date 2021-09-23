<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

$db=mysqli_connect('localhost','root','','fundraiser') or die('could not connect to database');

$query="select * from transactions";
$result=mysqli_query($db,$query)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Previous transactions</title>
	<link rel="stylesheet" type="text/css" href="front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="header">
	<header>
		<ul class="hdrlist">
			<li><i class="fa fa-home" style="font-size: 30px; " ></i><a href="front.php">Home</a></li>
			<li><i class="fa fa-money" style="font-size: 30px;"></i><a href="donate.php">Donate</a></li>
			<li><i class="fa fa-envelope" style="font-size: 30px;"></i><a href="suggestion.php">Suggest</a></li>
		</ul>
	</header>
    </div>

    <div class="history">
    <table  id="transactions">
    	<tr>
    		<th>No.</th>
    		<th>Name</th>
    		<th>Email</th>
    		<th>Donated(Rs.)</th>
    	</tr>
    	<?php
    	$no=1;
    	while ($row=mysqli_fetch_array($result)) {

    	?>

    	<tr>
    		<td><?php echo $no; ?></td>
    		<td><?php echo $row['name']; ?></td>
    		<td><?php echo $row['email']; ?></td>
    		<td><?php echo $row['amount']; ?></td>
    	</tr>

    	<?php
    	$no++;
    	}
    	?>
    	
    </table>

    </div>

    <footer>
            Contact Us<br>   
            <i class="fa fa-envelope" style="font-size: 15px; "></i>: rashu1keshari8@gmail.com <br> 
            <i class="fa fa-phone-square" style="font-size: 15px; "></i>: +91-6377726937<br><br>
            <i class="fa fa-copyright"></i>2020. Made by Prasanna,Puneet & Rashmi
        </footer>



</body>
</html>