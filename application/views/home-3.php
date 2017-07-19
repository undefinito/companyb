<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<div class="container-fluid">
		
	<div class="row bg-shoe-1">
		<div class="jumbotron bg-none">
			<h1 class="text-right space-right-10 font-em-3">
				<span class="label label-primary pointy font-serif">Company B</span>
			</h1>
		</div>
		
		<div class="clearfix"></div>

		<div class="col-xs-5 col-xs-offset-7 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
			<h2 class="bold font-mono hidden-xs hidden-sm">GOOD shoes take you GOOD places.</h2>
			<h4 class="bold font-mono hidden-md hidden-lg space-top-30">GOOD shoes take you <br class="hidden-sm">GOOD places.</h4>
		</div>
	</div>

	<div class="row top-nav">
		<nav class="navbar navbar-inverse pointy space-bottom-none">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navnav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo base_url('') ?>" class="navbar-brand">
						<span class="label label-primary pointy font-serif">Company B</span>
					</a>
				</div>
				<div>
					<div class="collapse navbar-collapse" id="navnav">
						<ul class="nav navbar-nav">
							<li><a href="#about_us">About Us</a></li>
							<li><a href="#products">Products</a></li>
							<li><a href="#contacts">Contacts</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<div class="row bg-primary">

		<div class="container custom">
			<h1 id="about_us">
				About Us
			</h1>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			<p> Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
	</div>

	<div class="row">
		<div class="container custom">
			<h1 id="products">
				Products
			</h1>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			<p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
		
	<div class="row">
			
		<div class="container custom items bg-gray">

			<nav class="well well-sm pointy">
				<div class="container-fluid">
					
					<ul class="nav nav-pills">
						<li data-nav-search>
							<div class="input-group products-filter-btns">
								<input type="text" name="search_item" class="form-control input-sm" placeholder="Search" />

								<div class="input-group-btn">
									<button type="button" class="btn btn-sm btn-default" data-action="search">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</li>
						<li data-nav-li class="hidden">
							<div class="btn-toolbar">
								<button type="button" data-action="prev" class="btn btn-sm btn-default products-filter-btns">
									<i class="fa fa-caret-left"></i>
									<small>Prev</small>
								</button>
								<button type="button" data-action="next" class="btn btn-sm btn-default products-filter-btns">
									<small>Next</small>
									<i class="fa fa-caret-right"></i>
								</button>
							</div>
						</li>
						<li data-nav-type class="pull-right">
							<button type="button" class="btn btn-sm btn-default products-filter-btns" data-show="all" data-action="filter">
								All
							</button>
							<button type="button" class="btn btn-sm btn-primary products-filter-btns" data-show="m" data-action="filter">
								Men's
							</button>
							<button type="button" class="btn btn-sm btn-primary products-filter-btns" data-show="f" data-action="filter">
								Women's
							</button>
							<button type="button" class="btn btn-sm btn-primary products-filter-btns" data-show="c" data-action="filter">
								Children's
							</button>
						</li>
					</ul>
			
				</div>
			</nav>
			<!-- well-sm -->

			<div class="loading-div hidden">
				<i class="fa fa-archive fa-3x fa-spin"></i>
			</div>

			<div id="products_content" class="container-fluid"> </div>
		</div>
		<!-- custom items container -->
		
	</div>
	<!-- row -->


	<div class="row">
		<div class="container custom">
			<h1 class="hidden-xs">
				Contacts
			</h1>
			<h1 id="contacts" class="text-center hidden-sm hidden-lg hidden-md">
				Contacts
			</h1>
			<dl class="dl-horizontal">
				<dt class="text-center">
					<i class="fa fa-map-marker"></i>
					Illinois
				</dt>
				<dd class="hidden-xs">44 Shirley Ave.</dd>
				<dd class="hidden-xs">West Chicago, IL 60185</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">44 Shirley Ave.</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">West Chicago, IL 60185</dd>
				<dt class="text-center">
					<i class="fa fa-map-marker"></i>
					Hawaii
				</dt>
				<dd class="hidden-xs">4 Goldfield Rd.</dd>
				<dd class="hidden-xs">Honolulu, HI 96815</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">4 Goldfield Rd.</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">Honolulu, HI 96815</dd>
				<dt class="text-center">
					<i class="fa fa-map-marker"></i>
					Florida
				</dt>
				<dd class="hidden-xs">123 6th St.</dd>
				<dd class="hidden-xs">Melbourne, FL 32904</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">123 6th St.</dd>
				<dd class="text-center hidden-sm hidden-lg hidden-md">Melbourne, FL 32904</dd>
			</dl>
		</div>
	</div>
	
	<div class="row space-top-50 padding-bottom-10 bg-black">
		<!-- FOOTER -->
		<div class="container text-white">

			<h2 class="text-center">
				<span class="label bg-blue pointy font-serif">Company B</span>
				<i class="fa fa-copyright"></i>
				<?php echo date('Y') ?>
			</h2>
		</div>
	</div>
	<!-- row -->

</div>
<!-- container-fluid -->

<div id="item_info_modal" class="modal fade">
	<div class="modal-dialog full-page">
		
		<div class="item-content"></div>
		<div class="loading-modal">
			<i class="fa fa-circle-o-notch fa-spin"></i>
		</div>
	</div>
</div>
<!-- #item_info_modal -->
