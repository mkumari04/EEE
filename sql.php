<?php
session_start();
include "connection.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM cat";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['id_product'];
			$pro_cat   = $row['categories'];
			$pro_brand = $row['brand'];
			$pro_title = $row['name'];
      $pro_lprice= $row['list_price'];
			$pro_price = $row['price'];
			$pro_image = $row['image'];
      $pro_desc = $row['description'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='images/$pro_image' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$$pro_price
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>
			";
		}
	}
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE categories = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE keywords LIKE '%$keyword%'";
	}

	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
    $pro_id    = $row['id_product'];
    $pro_cat   = $row['categories'];
    $pro_brand = $row['brand'];
    $pro_title = $row['name'];
    $pro_lprice= $row['list_price'];
    $pro_price = $row['price'];
    $pro_image = $row['image'];
    $pro_desc = $row['description'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='images/$pro_image' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$$pro_price
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>
			";
		}
	}

	
?>
