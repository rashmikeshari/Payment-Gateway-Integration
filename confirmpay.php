<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

$db=mysqli_connect('localhost','root','','fundraiser') or die('could not connect to database');

$name=$_GET['a'];
$email=$_GET['b'];
$phone=$_GET['c'];
$amt=$_GET['d'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment </title>
	<link rel="stylesheet" type="text/css" href="front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="header">
	<header>
		
	</header>
    </div>

    <div class="container0">

    
                <div class=form_1 >
                    <p class="info" style="font-size:1.5em; font-family:sans-serif; font-weight: bold;">
                        Please check all details before paying.
                    </p>
                </div>

    	    <div class="form" style="padding: 20px; margin-top: 20px;">
    	    	<form class="fill2" action="confirmpay.php" method="post">
    	
    		<div id="all" class="name" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Name </label><input style="grid-column: 2/4; background-color: rgba(0, 0, 0, 0.4);" type="text" name="name" required="" readonly="" value="<?php echo $name;?> "></div>

    		<div id="all" class="email" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Email </label><input style="grid-column: 2/4; background-color: rgba(0, 0, 0, 0.4);" type="text" name="email" required="" readonly=""  value="<?php echo $email; ?>"></div>

    		<div id="all" class="phone" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Phone </label><input style="grid-column: 2/4; background-color: rgba(0, 0, 0, 0.4);" type="text" name="phone"pattern="[0-9]{10}" required="" readonly="" value="<?php echo $phone; ?>"></div>

    		<div id="all" class="amt" style="display:grid; grid-template-columns: repeat(3, 1fr);"><label style="grid-column: 1/2; margin-top:19%;">Amount </label><input style="grid-column: 2/4; background-color: rgba(0, 0, 0, 0.4);" type="text" name="amount" required="" readonly="" value="<?php echo $amt; ?>"></div>
    	<div class="form_right" style="margin-top: 10%;">
    		<button id="rzp-button1"  class="pay">Donate Now</button>
            <a href="donate.php" class="cancel"><i class="fa fa-times"></i>Cancel Payment</a>
    	</div>
    	</form>
    
    </div>
</div>
    <footer><i class="fa fa-copyright"></i>2020. Made by Puneet & Rashmi</footer>

</body>
</html>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_kDW0VkpCxzAakL", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_GET['d'] * 100;?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Helping Hands",
    "description": "Donation For COVID",
    "image": "https://static.thenounproject.com/png/196653-200.png",
    "id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        var p=response.razorpay_payment_id

        
        
        window.location="success.php?a=<?php echo $_GET['a'];?>&b=<?php echo $_GET['b'];?>&c=<?php echo $_GET['c'];?>&d=<?php echo $_GET['d'];?>&e="+response.razorpay_payment_id
        
        
    },
    "prefill": {
        "name": "<?php echo $_GET['a'];?>",
        "email": "<?php echo $_GET['b'];?>",
        "contact": "<?php echo $_GET['c'];?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#0d7a82"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>