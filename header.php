<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
  <?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


  <?php tha_head_bottom(); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php tha_body_top(); ?>


<div id="page" class="hfeed site">
		<?php tha_content_before(); ?>

		<main id="main" class="site-main wrap" role="main">
			<?php tha_content_top(); ?>
