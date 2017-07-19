<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="container-fluid padding-left-none padding-right-none space-left-none space-right-none">

	<div class="other_parallax bg-shoe-1">

		<div class="jumbotron hidden-sm hidden-xs bg-none">
			<h1 class="text-right space-right-10 font-em-3">
				<span class="label label-primary pointy font-serif">Company B</span>
			</h1>
		</div>
		
		<div class="clearfix"></div>

		<div class="col-xs-5 col-xs-offset-7 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
			<h2 class="font-mono hidden-xs hidden-sm">GOOD shoes take you GOOD places.</h2>
			<h4 class="font-mono hidden-md hidden-lg space-top-30">GOOD shoes take you <br class="hidden-sm">GOOD places.</h4>
		</div>
			
	</div>

	<div class="container-fluid bg-black">
		<div class="col-lg-12">
			<h1 class="text-white">
				<a id="Footwear" href="#Footwear" class="text-white hover-white link-icon">
					<i class="fa fa-link"></i>
				</a>
				Footwear
			</h1>
			
			<?php if ( ! empty($products) && is_array($products)): ?>
				
				<div id="shoe_img_carousel" class="carousel slide" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<?php foreach ($products as $i => $item): ?>
							<div class="item <?php echo $i==0 ? 'active' : '' ?>">
								<img src="<?php echo asset_url("img/products/xs/{$item['image']}") ?>" class="img-responsive img-thumbnail" />
								<div class="carousel-caption">
									<div class="label label-default">
										<?php echo $item['name'] ?>
									</div>
								</div>

							</div>
						<?php endforeach ?>
					
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#shoe_img_carousel" role="button" data-slide="prev">
						<span class="fa fa-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#shoe_img_carousel" role="button" data-slide="next">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			<?php endif ?>

		</div>
	</div>

	<div class="other_parallax bg-shoe-3"> </div>

	<div class="container-fluid">
		<div class="col-lg-12">
			<h2>
				<a id="about_us" href="#about_us" class="text-white hover-red link-icon"><i class="fa fa-link"></i></a>
				About Us
			</h2>
			
		</div>
	</div>

	<div class="other_parallax bg-shoe-2 bottom-nav-container">
		
		<div class="container bottom-nav full-width">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">

					<div class="navbar-header hidden-md hidden-lg">
						<a href="<?php echo base_url('') ?>" class="navbar-brand">
							<span class="label label-primary pointy font-serif">Company B</span>
						</a>
					</div>

					<ul class="nav navbar-nav">
						<li>
							<a href="#about_us">
								<h4 class="bold hidden-xs hidden-sm">About Us</h4>
								<span class="bold hidden-md hidden-lg">About Us</span>
							</a>
						</li>
						<li class="dropup">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<h4 class="bold hidden-xs hidden-sm">
									Footwear
								</h4>
								<span class="bold hidden-md hidden-lg">
									Footwear
								</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#Footwear">Footwear</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#male_shoes">Men's</a>
								</li>
								<li>
									<a href="#female_shoes">Women's</a>
								</li>
								<li>
									<a href="#child_shoes">Children's</a>
								</li>
							</ul>
						</li>

						<!-- <li class="navbar-right space-right-15 space-top-10">
							<span class="text-white">
								<?php echo date('Y') ?> <i class="fa fa-copyright"></i>
								<b>Company B</b> Shoes, Inc.
							</span>
						</li> -->
					</ul>
						
					<p class="navbar nav navbar-right text-white">
						<?php echo date('Y') ?> <i class="fa fa-copyright"></i>
						<b>Company B</b> Shoes, Inc.
					</p>

				</div>
			</nav>
		</div>
	</div>
	
</div>

