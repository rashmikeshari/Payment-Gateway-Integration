<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

$db=mysqli_connect('localhost','root','','fundraiser') or die('could not connect to database');

$name=$_GET['a'];
$email=$_GET['b'];
$phone=$_GET['c'];
$amt=$_GET['d'];
$id=$_GET['e']

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment Successful</title>
</head>
<style type="text/css">
	body h2{
		color: white;
		font-family: Century Gothic;
		font-size: large;
		text-align: center;
		font-size: 4em;
	}
	body h3{
		color: whitesmoke;
		font-size: 2.2em;
		text-align: center;
		padding-top: 20px;
		font-family: Century Gothic;
		
	}
	h3 input[type=checkbox]{
		transform: scale(3);
		-webkit-transform: scale(3);
		padding:10px;
		margin-left:30px ;
	}

	body a{
		text-decoration: none;
		font-size: 1.5em;
		font-family: sans-serif;
		background-color: whitesmoke;
		color: black;
		text-align: center;
		margin-left: 42%;
		padding: 0.5em;
		margin-top: 20px;

	}
	body a:hover{
		background-color: black;
		color: whitesmoke;
	}
</style>
<body style="background-image: url(img/s1.jpg); width: 100%; background-repeat: no-repeat; background-size: cover;">

	<h2>Thanku You!! For Your Support</h2>
	<h3>Your Payment Id is <?php echo $id; ?></h3>
	

		<?php
		 $query="insert into transactions(name,email,phone,amount,TransactionId) values('$name','$email',$phone,$amt,'$id')";
        mysqli_query($db,$query);

		 ?>

	<a href="front.php">Go To Home Page</a>

</body>
</html>