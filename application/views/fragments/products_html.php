<?php defined('BASEPATH') OR exit('No direct script access allowed');

$_col_count = 2;
$products_count = count($products);
 foreach ($products as $i => $item): ?>
	<?php if (($i%$_col_count)==0): ?>
		<div class="row">
	<?php endif ?>
		<div class="<?php echo "col-md-",@intval(12/$_col_count) ?>">
			<div class="thumbnail pointy">
				<img src="<?php echo asset_url(empty($item['image']) ? 'img/products/lg/generic-shoe.jpeg' : "img/products/lg/{$item['image']}") ?>" alt="<?php echo 'pic ',$i+1 ?>" />
				<div class="caption">
					<h3><?php echo empty($item['name']) ? '' : $item['name'] ?></h3>
					<?php if ( ! empty($item['description'])): 
					$str_limit = 100;
					$truncated_str = truncateAtLastWord($item['description'],$str_limit).'...';
					?>
					<p><?php echo strlen($item['description'])>$str_limit ? $truncated_str : $item['description'] ?></p>
					<?php endif ?>
					<p>
						<a class="btn btn-sm btn-primary clickable" data-toggle="modal" data-target="#item_info_modal" data-show="info" data-id="<?php echo @intval($item['id']) ?>" role="button">More info</a>
					</p>
				</div>
			</div>
		</div>

	<?php if ((($i+1)%$_col_count)==0 OR ($i+1)==$products_count): ?>
		</div>
		<!-- row -->
	<?php endif ?>

<?php endforeach ?>
