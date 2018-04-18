<?php
require_once 'connection.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Toshiba</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheer" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
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
<br/>


<div class="col-md-12">
<div class="row">

  <div class="col-md-3">

  <img src="images/toshiba.jpg" alt="Toshiba Laptop" id="images"/>
  <h4>Toshiba Laptop</h4>
  <p class="list-price tet-danger">List Price: <s>$500.99</s></p>
  <p class="price">Our Price: $450.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>

  <div class="modal fade" id="details-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="center-block">
                      <img src="images/toshiba.jpg" alt="levis Jeans" class="details img-responsive" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <h4>Details</h4>
                    <p>This is an amazing product.</p>
                    <hr />
                    <p>Price: $450.99</p>
                    <p>Brand: Toshiba</p>
                    <form action="cart.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="quantity" id="quantity-label">Quantity</label>
                          <input type="text" class="form-control" id="quantity" name="quantity" />
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
            </div>
        </div>
    </div>
</div>

  </div>
  <div class="col-md-3">

  <img src="images/hp.png" alt="HP  Desktop" id="images"/>
  <h4>HP Desktop</h4>
  <p class="list-price tet-danger">List Price: <s>$500.99</s></p>
  <p class="price">Our Price: $450.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="details-2">Details
  </button>
  </div>
  <div class="col-md-3">

  <img src="images/dell.png" alt="Dell" id="images"/>
  <h4>Dell Desktop</h4>
  <p class="list-price tet-danger">List Price: <s>$600.99</s></p>
  <p class="price">Our Price: $500.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="details-3">Details
  </button>
  </div>
  <div class="col-md-3">

  <img src="images/dell.png" alt="Dell" id="images"/>
  <h4>Dell Desktop</h4>
  <p class="list-price tet-danger">List Price: <s>$500.99</s></p>
  <p class="price">Our Price: $450.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="details-3">Details
  </button>
  </div>
  <div class="col-md-3">

  <img src="images/dell.png" alt="Dell" id="images"/>
  <h4>Dell Desktop</h4>
  <p class="list-price tet-danger">List Price: <s>$500.99</s></p>
  <p class="price">Our Price: $450.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="details-3">Details
  </button>
  </div>
  <div class="col-md-3">

  <img src="images/dell.png" alt="Dell" id="images"/>
  <h4>Dell</h4>
  <p class="list-price tet-danger">List Price: <s>$300.99</s></p>
  <p class="price">Our Price: $250.99</p>
  <button type="button" class="btn-success" data-toggle="modal" data-target="details-3">Details
  </button>
  </div>
 </div>
 </div>
 <br/>



 <div id="footer">

   <h2 style="text-align:center; padding-top:30px;">&copy; EZ Electronic Shop</h2>

 </div>
</body>
</html>
