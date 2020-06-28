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

			<div style="width:100%;background-color:white;color:black;text-align:center;padding:10px;border:4px solid black;box-shadow:2px 2px 20px 10px grey;"><h3 class="title">Welcome to Book Store</h3></div>
			
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
