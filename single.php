<?php get_header(); ?>
<div id="site-header"></div>
<?php $subcategory = get_the_category(get_the_ID()); ?>
<?php
$subcategoy_name = $subcategory[0]->name;
$subcategory_slug = $subcategory[0]->slug;
$category_id = $subcategory[0]->parent;

$category = get_category($category_id);
$category_slug = $category->slug;
$category_name = $category->name;
$category_link = get_site_url() . "/" . $category_slug;
$subcategory_link = $category_link . "/" . $subcategory_slug;
?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
<div class="container" style="padding-right:7%;padding-left:7%;">
	<div class="single-post__breadcrumb">
		<ul>
			<li><a href="#">Home</a></li>
			<li><i class="fas fa-chevron-right breadcrumb__icon"></i></li>
			<li><a href="<?php echo $category_link; ?>"><?php print_r($category_name); ?></a></li>
			<li><i class="fas fa-chevron-right breadcrumb__icon"></i></li>
			<li><a href="<?php echo $subcategory_link; ?>"><?php print_r($subcategoy_name) ?></a></li>
		</ul>
	</div>
	<!-- Super Banner -->
	<div class="row mt-5 mb-5">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/super-banner'); ?>
		</div>
	</div>
	<!-- Fim banner -->
	<header style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
		url(<?php echo $image[0]; ?>);" class="single-post__banner">
		<div class="sigle-post__banner__title">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
	<!-- Banner Lateral -->
	<div class="row mt-5 mb-5">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/banner-lateral'); ?>
		</div>
	</div>
	<!-- Fim banner -->
	<?php the_post(); ?>
	<div class="single-post__content">
		<p><?php the_content(); ?></p>
	</div>
	<div id="final-post"></div>
	<section>
		<div>
			<div class="social-overlap process-section pt-5 pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="social-bar">
								<div class="social-icons mb-3 iconpad text-center">
									<p class="pt-3">Compartilhe conhecimento</p>
									<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
									<a class="slider-nav-item" href="javascript:void(0)" onclick="share_fb('<?php echo $actual_link; ?>');return false;" rel="nofollow" target="_blank">
										<i class="fab fa-facebook"></i>
									</a>
									<a href="https://api.whatsapp.com/send?phone&text=<?php echo urlencode($actual_link); ?>" target="_blank" class="slider-nav-item"><i class="fab fa-whatsapp"></i></a>
									<a href="https://twitter.com/intent/tweet?text=<?php echo $actual_link; ?>" target="_blank" class="slider-nav-item"><i class="fab fa-twitter"></i></a>
									<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $actual_link; ?>" target="_blank" class="slider-nav-item" title="Share on LinkedIn">
										<i class="fab fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		function share_fb(url) {
			window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'facebook-share-dialog', "width=626, height=436")
		}
	</script>
</div>
<?php get_footer();
