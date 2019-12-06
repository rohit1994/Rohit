<!DOCTYPE html>
<html>
<head>
<title><?php wp_title();?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">

<style>
</style>
</head>
<body class="bi">

	<?php wp_nav_menu(array('container_class'=>'menubar'));?>
	</div>