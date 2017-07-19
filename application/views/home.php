<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
				
	<nav class="navbar navbar-inverse navbar-fixed-bottom custom-navbar">
		<div class="container-fluid">

			<div class="navbar-header pull-left hidden-md hidden-lg">
				<a href="#" class="navbar-brand">
					<span class="label bg-blue">Company B</span>
				</a>
			</div>

			<ul class="nav navbar-nav">
				<li>
					<a href="#about_us">
						<h4 class="hidden-xs hidden-sm">About Us</h4>
						<span class="hidden-md hidden-lg">About Us</span>
					</a>
				</li>
				<li>
					<a href="#products">
						<h4 class="hidden-xs hidden-sm">Products</h4>
						<span class="hidden-md hidden-lg">Products</span>
					</a>
				</li>
			</ul>

		</div>
	</nav>
	
</div>

<div class="parallax">
	<div class="parallax__group">
		<div class="parallax__layer parallax__layer--back bg-shoe-1"></div>
		<div class="parallax__layer parallax__layer--base">

			<div class="jumbotron hidden-sm hidden-xs bg-none">
				<h1 class="text-right space-right-10 font-em-3">
					<span class="label bg-blue">Company B</span>
				</h1>
			</div>
		</div>
	</div>

	<div class="parallax__group">
		<div class="parallax__layer parallax__layer--back bg-shoe-2"> </div>
		<div class="parallax__layer parallax__layer--base bg-black text-white">
			
			<div class="row">
				<div class="col-lg-12">
					<h2>
						<a id="about_us" href="#about_us" class="text-white hover-red link-icon"><i class="fa fa-link"></i></a>
						About Us
					</h2>
					
				</div>
			</div>

		</div>
	</div>

	<div class="parallax__group">
		<div class="parallax__layer parallax__layer--back"> </div>
		<div class="parallax__layer parallax__layer--base bg-primary">

			<div class="row">
				<div class="col-lg-12">
					<h2>
						<a id="products" href="#products" class="text-white hover-red link-icon"><i class="fa fa-link"></i></a>
						Products
					</h2>
					
				</div>
			</div>

		</div>
	</div>
</div>
