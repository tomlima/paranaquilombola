<!doctype html>
<html lang="en">

<head>
	<?php $theme_version = wp_get_theme()->get('Version'); ?>
	<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
	<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
	<meta charset="<?php bloginfo("charset") ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">

	<!-- Style.css -->
	<link rel="preload" as="style" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo $theme_version; ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<!-- Swipper.css -->
	<link rel="preload" as="style" href="<?php echo get_template_directory_uri() . '/assets/css/swiper.min.css'; ?>" onload="this.rel='stylesheet'">

	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
	<script id="tagseoaddi" href="https://servico.addintelligence.com.br/ContentServer/setOrganicTraffic.min.js?id=Mackenzie" async></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script src="https://www.googletagmanager.com/gtag/js?id=UA-144943859-1" async></script>

	<script defer>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-144943859-1');
		gtag('config', 'UA-125552095-3');
	</script>


	<!-- NOVO Google Tag Manager -->
	<script async>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-PWJ2M56');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Ads: 1066618883 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1066618883"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-1066618883');
	</script>
	<!-- Snippet de evento -->
	<script>
		gtag('event', 'page_view', {
			'send_to': 'AW-1066618883',
			'value': 'replace with value',
			'items': [{
				'id': 'replace with value',
				'location_id': 'replace with value',
				'google_business_vertical': 'education'
			}]
		});
	</script>
	<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/0acdd8ca-e872-44e1-90fd-3a65cacc88a1-loader.js" ></script>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar">
				<div class="navbar__logo">
					<?php the_custom_logo(); ?>
					<div class="navbar__search">
						<div class="search">
							<input placeholder="Buscar.." id="search" type="search">
							<span class="search__icon"><img src="<?php echo get_template_directory_uri() . '/assets/img/search_icon.svg'; ?>" alt="Buscar"></span>
							<div class="search__results"></div>
						</div>
					</div>
				</div>



				<span class="navbar__menu-icon"><img src="<?php echo get_template_directory_uri() . '/assets/img/menu.svg'; ?>" alt="Menu"></span>


				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'navbar__menu navbar__menu--desktop',
						'container' => 'false',
					)
				);
				?>

			</nav>

			<section class="sidebar" mode="retracted">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'navbar-nav nav-mobile',
						'container' => 'false',
						'walker' => new WP_Bootstrap_Navwalker()
					)
				);
				?>
			</section>
		</div>
		</div>
	</header>


<div class="container">
	<div class="notfound">
		<img src="https://blog.mackenzie.br/wp-content/uploads/2022/04/notfound.gif" alt="">
		<span>Página não encontrada</span>
	</div>
</div>

<?php get_footer();
