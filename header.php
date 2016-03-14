<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <!-- stylesheets should be enqueued in functions.php -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/simpletextrotator.css" media="screen"/>
  <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery.fatNav.css" media="screen"/> -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


