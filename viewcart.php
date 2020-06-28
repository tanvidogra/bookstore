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
				<div style="text-align:right;margin:20px">

				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" placeholder="ENTER NAME TO SEARCH . . . "name="s" value=""style="width:400px;height:40px;" />
					<input type="submit" id="x" value="Search"style="width:100px;height:40px;" />
					</fieldset>
				</form>
				</div>
			<!-- start page -->
			<!-- end header -->
			<!-- start page -->
<div style="width:100%;background-color:white;color:black;text-align:center;padding:10px;border:4px solid black;box-shadow:2px 2px 20px 10px grey;"><h3 class="title">Cart</h3></div>
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > 
							<a href="checkout.php">CONFIRM & PROCEED<a/>
							</center>
							</form>
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
