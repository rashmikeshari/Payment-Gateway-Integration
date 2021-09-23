<?php

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
$errors2=array();
$error="";

$db=mysqli_connect('localhost','root','','fundraiser') or die('could not connect to database');
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$amt=mysqli_real_escape_string($db,$_POST['amount']);

if(empty($name)){
    array_push($errors2, "required name");
    
}
if(empty($email)){
    array_push($errors2,"required email");
    
}
if(empty($phone)){
    array_push($errors2,"required phone");

}
if(empty($amt)){
    array_push($errors2,"required");
}

if(count($errors2)==0){
    header("location:confirmpay.php?a=$name&b=$email&c=$phone&d=$amt");

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Donate</title>
	<link rel="stylesheet" type="text/css" href="front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<div class="header">
	<header>
		<ul class="hdrlist">
			<li><i class="fa fa-home" style="font-size: 30px; " ></i><a href="front.php">Home</a></li>
            <li><i class="fa fa-history" style="font-size: 30px;"></i><a href="history.php">Transactions</a></li>
			<li><i class="fa fa-envelope" style="font-size: 30px;"></i><a href="suggestion.php">Suggest</a></li>
		</ul>
	</header>
    </div>

    <div class="container0">

        <div class="side"> 

        <h2>DONATION CAUSE</h2>
        <h3># COVID19</h3>

        </div>

    	    <div class="formdonate" >
                <div class=form_1>
                    <p class="info">
                        
                    </p>
                </div>
                <h2 style="text-align: left; font-family: sans-serif;">Payment Details</h2>
                <br>

    	<form class="fill2" action="donate.php" method="post">
    	
    		<div class="all" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Name <span style="color: red;">*</span> </label><input style="grid-column: 2/4;" type="text" name="name" required=""></div>

    		<div class="all" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Email <span style="color: red;">*</span></label><input style="grid-column: 2/4;" type="text" name="email" required=""></div>

    		<div class="all" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Phone <span style="color: red;">*</span></label><input style="grid-column: 2/4;" type="text" name="phone"pattern="[0-9]{10}" required=""></div>

    		<div class="all" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Amount <span style="color: red;">*</span></label><input style="grid-column: 2/4;" type="text" name="amount" required=""></div>
    	<div class="form_right" >
    		<button style="padding:0.3em; width: 30%; margin-left: 30%;" class="pay" >Donate Now</button>
    	</div>

    	</form>
    	
    </div>
</div>
    <footer><i class="fa fa-copyright"></i>2020. Made by Prasanna,Puneet & Rashmi</footer>

</body>
</html>


