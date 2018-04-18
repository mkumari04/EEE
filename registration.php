<!DOCTYPE html>
<html>
<head>
 <title>EZ Electronics</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <link rel="stylesheet" href="css/main.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <li style="width:300px;left:50px;top:20px;"><input type="text" class="form-control" id="search"></li>
    <li style="top:20px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>

  <ul class="nav navbar-nav navbar-right">
    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
      <div class="dropdown-menu" style="width:400px;">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-3">Sl.No</div>
              <div class="col-md-3">Product Image</div>
              <div class="col-md-3">Product Name</div>
              <div class="col-md-3">Price in $.</div>
            </div>
          </div>
          <div class="panel-body"></div>
          <div class="panel-footer"></div>
        </div>
      </div>
    </li>
    <li><a href="login.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
      <ul class="dropdown-menu">
        <div style="width:300px;">
          <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
            <div class="panel-heading">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" required/>
              <label for="email">Password</label>
              <input type="password" class="form-control" id="password" required/>
              <p><br/></p>
              <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
            </div>
            <div class="panel-footer" id="e_msg"></div>
          </div>
        </div>
      </ul>
    </li>
    <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
  </ul>
</ul>
    </div>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">

			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Registration Form</div>
					<div class="panel-body">

					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>

					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

 <div id="footer">

   <h2 style="text-align:center; padding-top:30px;">&copy; EZ Electronic Shop</h2>

 </div>


 </body>

</html>
