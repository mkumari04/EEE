<?php
$connect = mysqli_connect("localhost", "root", "", "ez");
$tab_query = "SELECT * FROM cat ORDER BY cat_id ASC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["cat_id"].'" data-toggle="tab">'.$row["cat_title"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["cat_id"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["cat_id"].'" data-toggle="tab">'.$row["cat_title"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["cat_id"].'" class="tab-pane fade">
  ';
 }
 $product_query = "SELECT * FROM products WHERE categories = '".$row["cat_id"]."'";
 $product_result = mysqli_query($connect, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-4" style="margin-bottom:36px;">
   <img src="images/'.$sub_row["image"].'" class="img-responsive img-thumbnail" />
   <h4>'.$sub_row["name"].'</h4>
   <p class="list-price tet-danger">List Price: <s>'.$sub_row["list_price"].'</s></p>
   <p class="price">Our Price: '.$sub_row["price"].'</p>
   <button type="button" class="btn-success" data-toggle="modal" data-target="#details-1">Details</button>
   <div class="modal fade" id="details-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">'.$sub_row["name"].'</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
               <div class="container-fluid">
                 <div class="row">
                   <div class="col-sm-6">
                     <div class="center-block">
                       <img src="images/'.$sub_row["image"].'" class="img-responsive img-thumbnail" />
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <h4>Details</h4>
                     <p>'.$sub_row["description"].'</p>
                     <hr />
                     <p>Price: '.$sub_row["price"].'</p>


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
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}

if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($connect,$brand_query);
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


?>
