<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="thumbnail">
	<img src="<?php echo empty($src) ? asset_url('img/products/lg/generic-shoe.jpg') : $src ?>" alt="image">
	
	<div class="caption">
		<h4>
			<?php echo $item['name'] ?>
			<small><?php echo $item['price'] ?></small>
		</h4>
		<?php if ( ! empty($item['description'])): ?>
		<p><?php echo $item['description'] ?></p>
		<?php endif ?>
			
		<div class="container-fluid">
			<a data-dismiss="modal" class="btn btn-block btn-sm btn-primary">
				Close
			</a>
		</div>
	</div>
</div>