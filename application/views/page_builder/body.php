<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php echo empty($header) ? '' : $header ?>
</head>
<body class="<?php echo empty($body_class) ? '' : $body_class ?>" <?php echo empty($body_other) ? '' : $body_other ?>>
	<?php echo empty($body) ? '' : $body ?>
		
	<?php echo empty($js) ? '' : $js ?>
</body>
</html>