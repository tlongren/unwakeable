<?php
	// Prevent users from directly loading this theme file
	defined( 'K2_CURRENT' ) or die ( 'Error: This file can not be loaded directly.' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://purl.org/uF/2008/03/ http://purl.org/uF/hAtom/0.1/">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="template" content="K2 <?php k2info('version'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link  href="//fonts.googleapis.com/css?family=Geo:regular" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/style.css" />

	<?php /* Child Themes */ if ( K2_CHILD_THEME ): ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php endif; ?>

	<?php if ( is_singular() ): ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php endif; ?>

	<?php wp_head(); ?>

	<?php wp_get_archives('type=monthly&format=link'); ?>
</head>

<body class="<?php k2_body_class(); ?>">

<?php /* K2 Hook */ do_action('template_body_top'); ?>

<div id="page">

	<?php /* K2 Hook */ do_action('template_before_header'); ?>

	<div id="header">

	<div class="top">

            <div id="title" class="title">
				<p><a href="<?php echo home_url(); ?>" title="Back to the front page"><?php bloginfo('name'); ?></a></p>
			</div>
		<?php wp_nav_menu( array( 'menu_id' => 'menu','container' => 'false','menu_class' => 'main-nav','fallback_cb' => 'defaultUnwakeableMenu' ) ); ?>
	</div>

	</div> <!-- #header -->

	<hr />

	<?php /* K2 Hook */ do_action('template_before_content'); ?>
