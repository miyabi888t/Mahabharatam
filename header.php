<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.typekit.net/qal2ybs.css">
	<title>マハーバラタ</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
	<script></script>
<?php wp_head(); ?>
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
    	location = 'http://localhost:8888/daily-trial/confirm/';
		}, false );
	</script>
</head>
<body> 
  <header>
    <div class="header-contents">
		<div class="inner">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'global',
						'container' => 'nav',
						'container_class' => 'header-nav',
						'menu_class' => 'header-list',
					)						
					);
					 ?>
        </div>
    </div>
  </header>
