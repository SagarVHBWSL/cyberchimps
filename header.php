<?php
/**
 * TODO: Edit Title Content
 *
 * TODO: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Response core framework and all modifications
 * should be made in a child theme. TODO: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Response
 * @package  Framework
 * @since	 1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php
	// TODO: UPDATE THIS TITLE CODE (MAKE SURE IT WORKS WITH YOAST'S SEO PLUGIN)
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'response' ), max( $paged, $page ) );

	?></title>
	
	<?php do_action('response_title'); ?>
	
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
    
    <?php //TODO: TRY TO FIND A WAY TO ENQUEQUE THIS ?>
    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/js/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
	
<?php do_action('response_before_header_container'); ?>

<header id="masthead" class="container-fluid">

	<?php do_action('response_before_header'); ?>

	<hgroup class="row-fluid">
		<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</hgroup><!-- .row-fluid -->
	
	<?php do_action('response_after_header'); ?>
	
	<?php do_action('response_before_navigation'); ?>
	
	<nav class="main-navigation row-fluid">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- .main-navigation .row-fluid -->
	
	<?php do_action('response_after_navigation'); ?>
	
</header><!-- #masthead .container-fluid -->

<?php do_action('response_after_header_container'); ?>
