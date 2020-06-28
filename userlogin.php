<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
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
	<div style="text-align:right;margin:20px">

				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" placeholder="ENTER NAME TO SEARCH . . . "name="s" value=""style="width:400px;height:40px;" />
					<input type="submit" id="x" value="Search"style="width:100px;height:40px;" />
					</fieldset>
				</form>
				</div>
			<div style="width:100%;background-color:white;color:black;text-align:center;padding:10px;border:4px solid black;box-shadow:2px 2px 20px 10px grey;"><h3 class="title">Welcome to Book Store</h3></div>
			
				<div id="page">
					
					<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '
								<form action="process_login.php" method="POST">
<div style="margin:100px 100px 100px 100px;padding:100px;border:2px solid black;background-color:white">
														
								<h1>User Login</h1>
								<table border="1" width="100%" cellspacing="10px">
								<tr><td><b>Username:</b></td><td><input type="text" name="usernm" style="width:400px;height:40px"></td></tr>
								<tr><td><b>Username:</b></td><td><input type="password" name="pwd" style="width:400px;height:40px"></td></tr>
								<tr><td><b></b></td><td><input type="submit" id="x" value="Login" style="width:400px;height:40px" /></td></tr>
											
											
											
										</div>
										</form>';
							}
						?>
			
				</div>
				</div>
				</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
			
			<!-- end footer -->
</body>
</html>
