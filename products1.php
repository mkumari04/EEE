<?php
include "sql.php";
?>

<!DOCTYPE html>
<html>
<head>
 <title>EZ Electronics</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <link rel="stylesheet" href="css/main.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="js/jquery2.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script>
</head>
 <body>



  <div>

    <div>
    <marquee class="GeneratedMarquee" direction="left" scrollamount="8" behavior="alternate">EZ Electronics</marquee>
    </div>
    <div>
      <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>

   <br />
   <div class="container-fluid">
   		<div class="row">

   			<div class="col-md-2 col-xs-12">

   				<div id="get_brand">
   				</div>

   			</div>
   			<div class="col-md-8 col-xs-12">
   				<div class="row">
   					<div class="col-md-12 col-xs-12">
   					</div>
   				</div>
   				<ul class="nav nav-tabs">
      <?php
      echo $tab_menu;
      ?>
      </ul>
      <div class="tab-content">
      <br />
      <?php
      echo $tab_content;
      ?>
      </div>

   	</div>


  </div>
</div>
  <div id="footer">

    <h2 style="text-align:center; padding-top:30px;">&copy; EZ Electronic Shop</h2>

  </div>
 </body>
</html>
