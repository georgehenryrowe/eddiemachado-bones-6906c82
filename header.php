<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/perus-logo.png" id="logo"></a>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/nav-background.png" class="navbackground">
					<div id="nav">
						<ul>
							<li><a href="#" class="menublog">Blog</a></li>
							<li><a href="#" class="menuteam">Team</a></li>
							<li><a href="#" class="menushop">Shop</a></li>
							<li><a href="#" class="menuvideos">Videos</a></li>
							<li><a href="http://localhost/peruscrew2/about/" class="menuabout">About</a></li>
							<li><a href="#" class="menustockists">Stockists</a></li>
							<li><a href="#" class="menuart">Art</a></li>
							<li><a href="#" class="menuarchive">Archive</a></li>
						</ul>
					</div>
					<div id="socialicons">
						<a href="#" class="social youtube">Perus on Youtube</a>
						<a href="#" class="social vimeo">Perus on Vimeo</a>
						<a href="#" class="social facebook">Perus on Facebook</a>
						<a href="#" class="social instagram">Perus on Instagram</a>
						<a href="#" class="social twitter">Perus on Twitter</a>
					</div>
				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
