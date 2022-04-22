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
							<div class="bread"><a href="#">Home</a> &rsaquo; Register</div>
							<div class="bigtitle">Register</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							<button class="btn btn-default btn-red btn-lg">Purchase Theme</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<form class="form-horizontal checkout" role="form">
			<div class="row">
				<div class="col-md-6">
					<div class="title-bg">
						<div class="title">Personal Details</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="last_name" placeholder="Last Name">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="phone" placeholder="Phone">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="fax" placeholder="Fax">
						</div>
					</div>
					<div class="title-bg">
						<div class="title">Account Details</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="username-2" placeholder="Username-2">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="pass" placeholder="Password">
						</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="conpass" placeholder="Confirm Password">
						</div>
						<div class="col-sm-6">
							
						</div>
					</div>
					<button class="btn btn-default btn-red">Register</button>
				</div>
				<div class="col-md-6">
					<div class="title-bg">
						<div class="title">Your address</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="company" placeholder="Company">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="address" placeholder="Address">
						</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="city" placeholder="city">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="postcode" placeholder="Post Code">
						</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" id="country" placeholder="country">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="state" placeholder="State">
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="spacer"></div>
	</div>
	
<?php
include 'footer.php'
?>