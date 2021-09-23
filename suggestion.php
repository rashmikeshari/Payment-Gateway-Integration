<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
$errors2=array();
$error="";

$db=mysqli_connect('localhost','root','','fundraiser') or die('could not connect to database');
$name=mysqli_real_escape_string($db,$_POST['Name']);
$email=mysqli_real_escape_string($db,$_POST['Email']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$message=mysqli_real_escape_string($db,$_POST['message']);

if(empty($name)){
    array_push($errors2, "required name");
    
}
if(empty($email)){
    array_push($errors2,"required email");
    
}
if(empty($phone)){
    array_push($errors2,"required phone");

}
if(empty($message)){
    array_push($errors2,"required");
    
}
if(count($errors2)==0){
    $query="insert into suggestion(name,email,phone,message) values('$name','$email',$phone,'$message')";
    mysqli_query($db,$query);


    ?><script type="text/javascript">
        alert("Message Sent!!")
    </script><?php
    
    } 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suggestion</title>
	<link rel="stylesheet" type="text/css" href="front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
	<header>
		<ul class="hdrlist">
			<li><i class="fa fa-home" style="font-size: 30px; " ></i><a href="front.php">Home</a></li>
            <li><i class="fa fa-history" style="font-size: 30px;"></i><a href="history.php">Transactions</a></li>
			<li><i class="fa fa-money" style="font-size: 30px;"></i><a href="donate.php">Donate</a></li>
		</ul>
	</header>
    </div>
	<div class="container4">
            <div class="form">
                <h2>IF ANY SUGGESTION....</h2>
                <div class=form_1>
                    <p class="info">
                        If you want to help others in other ways too and you have any suggestions for that you can send us we will surely take initiative to do anything possible for the help and contact you back, and if anything you wants to share with us we will be glad to know.
                        <span style="font-weight: bolder;">#COVIDWARRIORS</span>
                    </p>
                </div>
                
                <form class="fill" action="suggestion.php" method="post">

                    <div class="form_left">
                    <input type="text" name="Name" id="name" placeholder="Name" required="">
                    <input type="text" name="Email" id="email" placeholder="Email" required="">
                    <input type="text" name="phone" placeholder="Phone ex.89xxxxxxxx" pattern="[0-9]{10}" required="">
                    </div>
                    <div class="form_right">
                    <textarea name="message" placeholder="Your Message Here..." required=""></textarea>
                    <button type="submit" id="submit">Send</button>
                    </div>
                
                </form>
            </div>
        </div>

        <footer>
            Contact Us<br> 
            <i class="fa fa-envelope" style="font-size: 15px; "></i>: rashu1keshari8@gmail.com <br>  
            <i class="fa fa-phone-square" style="font-size: 15px; "></i>: +91-6377726937<br><br>
            <i class="fa fa-copyright"></i>2020. Made by Prasanna,Puneet & Rashmi
        </footer>
</body>
</html>