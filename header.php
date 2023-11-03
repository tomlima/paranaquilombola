<!doctype html>
<html lang="en">

<head>
	<?php $theme_version = wp_get_theme()->get('Version'); ?>
	<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
	<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<meta charset="<?php bloginfo("charset") ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if ($thumbnail) { ?>
		<meta property="og:image" content="<?php echo $thumbnail[0]; ?>" />
	<?php } ?>
	<meta property="og:url" content="<?php echo $actual_link; ?>" />
	<meta property="og:type" content="article" />

	<!-- Style.css -->
	<link rel="preload" as="style" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo $theme_version; ?>">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>

<body>
<?php get_template_part('template-parts/header/header'); ?>


