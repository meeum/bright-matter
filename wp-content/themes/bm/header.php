<!doctype html>

<html <?php language_attributes(); ?> class=" no-js  
	
	<?php

	// Run code only for Single post page (clients)
	if ( is_single() && 'post' == get_post_type() ) {
		$colour_scheme = get_field( "post_colour_scheme" );
	} else {
		// this is for everything else (pages)
		$colour_scheme = get_field( "page_colour_scheme" );
	}
	// load colour scheme if there is one.
	
	if( $colour_scheme ) {
		echo $colour_scheme;
		
	} 

?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php wp_title( '' ); ?>
		<?php if ( wp_title( '', false ) ) { echo ' : '; } ?>
		<?php bloginfo( 'name' ); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<!-- <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png"
		rel="apple-touch-icon-precomposed"> -->


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>"
		href="<?php bloginfo( 'rss2_url' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		// conditionizr.config({
		// 	assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
		// 	tests: {}
		// });
	</script>



</head>

<body <?php body_class(); ?>>



	<!-- header -->
	<header class="header" role="banner">

		<div class="inner">

			<!-- nav -->
			<nav class="nav" role="navigation">
				<!-- <button class="nav-prompt">Nav</button> -->
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /nav -->

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/bright-matter-logo.svg" alt="Logo"
						class="logo-img"> -->
					
					<?php 
					//get_template_part( 'resources/img/bright-matter-logo.svg' )

					// http://willmclean.net/adding-inline-svgs-in-wordpress/
					
					echo file_get_contents( get_template_directory() . '/resources/img/bright-matter-logo.svg' );
; ?>

					
					<!-- <img src="https://via.placeholder.com/200x100/000/fff?text=logo" alt="Logo" class="logo-img" width="200px" height="100px"> -->

				</a>
			</div>
			<!-- /logo -->

		</div>

	</header>
	<!-- /header -->