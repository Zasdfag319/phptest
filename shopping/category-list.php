<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php'
?>

	<div class="container">
		<ul class="small-menu"><!--small-nav -->
			<li><a href="" class="myacc">My Account</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul><!--small-nav -->
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="#">Home</a> &rsaquo; Category</div>
							<div class="bigtitle">Category</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<button class="btn btn-default btn-red btn-lg">Purchase Theme</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Category - All products</div>
					<div class="title-nav">
						<a href="category.php"><i class="fa fa-th-large"></i>grid</a>
						<a href="category-list.php"><i class="fa fa-bars"></i>List</a>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<ul class="gridlist">
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<div class="hot"></div>
									<a href="product.php"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="gridlisttitle">Nikon Camera <span>Item no.: 1442</span></div>
								<p class="gridlist-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
							<div class="col-md-2">
								<div class="gridlist-pricetag on-sale"><div class="inner"><span><span class="oldprice">$314</span>$199</span></div></div>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<a href="#"><span class="trolly">&nbsp;</span>Add to cart</a>
							<a href="#"><i class="fa fa-plus"></i>Add to compare list</a>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<div class="new"></div>
									<a href="product.php"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="gridlisttitle">Red T-Shirt <span>Item no.: 1442</span></div>
								<p class="gridlist-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
							<div class="col-md-2">
								<div class="gridlist-pricetag on-sale"><div class="inner"><span><span class="oldprice">$314</span>$199</span></div></div>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<a href="#"><span class="trolly">&nbsp;</span>Add to cart</a>
							<a href="#"><i class="fa fa-plus"></i>Add to compare list</a>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<a href="product.php"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="gridlisttitle">Some Camera <span>Item no.: 1442</span></div>
								<p class="gridlist-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
							<div class="col-md-2">
								<div class="gridlist-pricetag blue"><div class="inner"><span>$199</span></div></div>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<a href="#"><span class="trolly">&nbsp;</span>Add to cart</a>
							<a href="#"><i class="fa fa-plus"></i>Add to compare list</a>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<a href="product.php"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="gridlisttitle">Black Shoes <span>Item no.: 1442</span></div>
								<p class="gridlist-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
							<div class="col-md-2">
								<div class="gridlist-pricetag blue"><div class="inner"><span>$199</span></div></div>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<a href="#"><span class="trolly">&nbsp;</span>Add to cart</a>
							<a href="#"><i class="fa fa-plus"></i>Add to compare list</a>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
				
				<ul class="pagination shop-pag"><!--pagination-->
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul><!--pagination-->

			</div>
			<div class="col-md-3"><!--sidebar-->
				<div class="title-bg">
					<div class="title">Categories</div>
				</div>
				
				<div class="categorybox">
					<ul>
						<li><a href="category.php">Women Accessories</a></li>
						<li><a href="category.php">Men Shoes</a></li>
						<li><a href="category.php">Gift Specials</a></li>
						<li><a href="category.php">Electronics</a>
							<ul>
								<li><a href="#">iPhone 4S</a></li>
								<li><a href="#">Samsung Galaxy</a></li>
								<li><a href="#">MacBook Pro 17"</a></li>
							</ul>
						</li>
						<li><a href="category.php">On sale</a></li>
						<li><a href="category.php">Summer Specials</a></li>
						<li><a href="category.php">Electronics</a></li>
						<li class="lastone"><a href="category.php">Unique Stuff</a></li>
					</ul>
				</div>
				
				<div class="ads">
					<a href="product.php"><img src="images\ads.png" class="img-responsive" alt=""></a>
				</div>
				
				<div class="title-bg">
					<div class="title">Best Seller</div>
				</div>
				<div class="best-seller">
					<ul>
						<li class="clearfix">
							<a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
							<div class="mini-meta">
								<a href="#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
						<li class="clearfix">
							<a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
							<div class="mini-meta">
								<a href="#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
						<li class="clearfix">
							<a href="#"><img src="images\demo-img.jpg" alt="" class="img-responsive mini"></a>
							<div class="mini-meta">
								<a href="#" class="smalltitle2">Panasonic M3</a>
								<p class="smallprice2">Price : $122</p>
							</div>
						</li>
					</ul>
				</div>
				
			</div><!--sidebar-->
		</div>
		<div class="spacer"></div>
	</div>
	
<?php
include 'footer.php'
?>