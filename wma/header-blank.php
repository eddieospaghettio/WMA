<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
	<?php wp_head(); 
	global $base_url;
	$base_url= get_site_url().'/';
	?>
    
</head>
<?php include('inc/myfunctions.php'); ?> 
<body <?php body_class(); ?>>
