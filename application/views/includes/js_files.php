<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- jQuery -->
<script src="<?php echo asset_url('js/jquery-2.1.4.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo asset_url('lib/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- Filter Input -->
<script src="<?php echo asset_url('js/jquery.filter_input.js') ?>"></script>

<script>
	var baseurl = <?php echo base_url(); ?>;
</script>

<!-- Page-specific JS -->
<?php if ( ! empty($js_paths) && is_array($js_paths)): ?>
	<?php foreach ($js_paths as $key => $value): ?>
		<?php switch ($key):
			default: ?>
			<?php if (is_array($value)): ?>

				<?php foreach ($value as $v): ?>
					<?php if (file_exists(asset_path("/js/page/{$key}/{$v}.js"))): ?>
					<script src="<?php echo asset_url("js/page/{$key}/{$v}.js") ?>"></script>
					<?php else: ?>
					<script>
						console.warn(<?php echo json_encode("{$v}.js not found") ?>);
					</script>
					<?php endif ?>
				<?php endforeach ?>

			<?php elseif (file_exists(asset_path("/js/page/{$key}/{$value}.js"))): ?>
			<script src="<?php echo asset_url("js/page/{$key}/{$value}.js") ?>"></script>
			<?php else: ?>
			<script>
				console.warn(<?php echo json_encode("{$value}.js not found") ?>);
			</script>
			<?php endif ?>
		<?php break; ?>
			
		<?php endswitch ?>
	<?php endforeach ?>
<?php else: ?>
	<script>
		console.warn('JS for page not found');
	</script>
<?php endif ?>