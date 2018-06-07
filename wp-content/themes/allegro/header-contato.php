<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo( 'name' ); echo ' | '; wp_title(''); ?></title>
    <meta name="description" content=""/>
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="<?php echo get_home_url(); ?>" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

		<!--script type='text/javascript' src='<?php echo get_home_url(); ?>/wp-includes/js/jquery/jquery.js'></script-->
		<!--script type='text/javascript' src='<?php echo get_home_url(); ?>/wp-includes/js/jquery/jquery-migrate.min.js'></script-->

		<style type="text/css">
			html {margin-top: 0px !important;}
		</style> 

	</head>

	<noscript>
    <style>.initial-hidden {
      opacity: 1
      }
    </style>
  </noscript>

<body <?php body_class('page-template page-template-template-range page-template-template-range-php lounge'); ?>>
	<div class="body-wrapper have-banner">

		<div id="navOverlay">
			<div id="nav-menu-wrapper">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'collection-menu' )); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container' => false, 'container_class' => 'nav-menu-wrapper', 'menu_class' => 'main-menu' )); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'container' => false, 'menu_class' => 'social' )); ?>
			</div>
		</div>

		<!--[if IE]>
		  <div class="alert alert-warning"> You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</div>
		<![endif]-->

		<header>
		  <div class="icon">
		    <a href="<?php echo get_site_url(); ?>"><img class="icon-not-stacked" src="<?php echo get_home_url(); ?>/wp-content/themes/allegro/assets/images/icons_EC-logo-reg-white.svg"></a>
		    <a href="<?php echo get_site_url(); ?>"><img class="icon-stacked" src="<?php echo get_home_url(); ?>/wp-content/themes/allegro/assets/images/icons_EC-logo-stacked-white.svg"></a>
		  </div>
		</header>

		<div class="burger-btn fade-in">
		  <div class="icon-bar one"></div>
		  <div class="icon-bar two"></div>
		  <div class="icon-bar three"></div>
		</div>