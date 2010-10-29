<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/960.css" type="text/css" media="screen">
	<?php if (is_home()) { ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/styles.css" type="text/css" media="screen">
	<style>
		#menu ul.sf-menu > li.linkHome {
			background-color: red;
			background:url("<?php bloginfo('template_directory'); ?>/style/img/bg-current-item.png") repeat-x scroll left bottom transparent;
			margin-right:5px;
			padding-right:15px;
			}
	</style>
	<?php } else { ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/styles.css" type="text/css" media="screen">
	<?php } ?>

	<?php wp_head(); // For plugins ?>
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<div class="container_12">
			<a href="http://www.journalists.org/" title="Online News Association" class="ona-home">Online News Association</a>
			<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
			<h2>2010 ONA Conference and Online Journalism Awards</h2>
			<h3>October 28-30, 2010 - Marriott Renaissance Hotel</h3>
		</div>
		<!-- /.container_12 --> 
		<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
		<?php wp_nav_menu( array('menu_class' => 'main-nav sf-menu', 'container_class' => 'menu', 'container_id' => 'menu' )); ?>
		</div><!-- #access -->
	</div>
	<!-- /#header --> 


	
