<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>			<!-- start header -->
				<div id="header">
					<div id="menu">
					<div style="float:left;width:200px;height:70px;margin-left:100px;"><img src="images/logo.jpg" height="70px;" width="200px"></img></div>
					<div style="float:left"><?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				</div>
				
				<div id="logo-wrap">
					<div id="1">
						<div class="w3-content w3-section" style="">
  <img class="mySlides" src="images/a.png" style="width:100%;height:400px;">
  <img class="mySlides" src="images/b.png" style="width:100%;height:400px;">
  <img class="mySlides" src="images/c.png" style="width:100%;height:400px;">
  <img class="mySlides" src="images/e.jpg" style="width:100%;height:400px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->
			<!-- end header -->
			
			<!-- start page -->
				<div style="text-align:right;margin:20px">

				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" placeholder="ENTER NAME TO SEARCH . . . "name="s" value=""style="width:400px;height:40px;" />
					<input type="submit" id="x" value="Search"style="width:100px;height:40px;" />
					</fieldset>
				</form>
				</div>
<div style="width:100%;background-color:white;color:black;text-align:center;padding:10px;border:4px solid black;box-shadow:2px 2px 20px 10px grey;"><h3 class="title">Contact Us</h3></div>
			
			
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Secure Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">PayUmoney</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">PAYTM Wallet</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Mobikwik</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Cash On Delivery</a></div></br>