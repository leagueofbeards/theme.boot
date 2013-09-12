<?php namespace Habari; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php Options::out('title'); ?> <?php if( $request->display_page && isset($post) ) { echo ' &mdash; ' .  $post->title; } ?><?php echo $title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/style.css" media="screen" type="text/css">
	<link rel="Shortcut Icon" href="<?php Site::out_url('theme'); ?>/favicon.png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script>
		if ( typeof(OBJ) == "undefined" ) { OBJ = {}; }
			OBJ.url = "<?php Site::out_url('habari'); ?>";
			OBJ.WSSE = <?php echo json_encode(Utils::WSSE()); ?>;
			OBJ.WSSE_update = '<?php echo URL::get('auth_ajax', array('context' => 'wsse_update')); ?>';
	</script>

	<?php echo $theme->header(); ?>
</head>
<body>