<div class="swiper carousel-principal">
	<div class="carousel-principal__wrp swiper-wrapper">
		<?php
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 4, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		));
		foreach ($recent_posts as $post) : ?>
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post['ID']), 'single-post-thumbnail'); ?>
			<div class="carousel-principal__item swiper-slide">
				<a href="<?php echo get_permalink($post['ID']); ?>">
					<div class="carousel-principal__img">
						<?php echo get_the_post_thumbnail($post['ID'], 'large', array('class' => 'fluid')); ?>
					</div>
				</a>
				<div class="carousel-principal__content">
					<span class="carousel-principal__code"><?php echo date('d/m/Y', strtotime($post['post_date'])); ?></span>
					<div class="carousel-principal__title">
						<a href="<?php echo get_permalink($post['ID']); ?>">
							<?php echo $post['post_title']; ?>
						</a>
					</div>
					<div class="carousel-principal__text"> <?php echo apply_filters('the_excerpt', wp_trim_words(strip_tags($post['post_excerpt']), 25, '...'));  ?> </div>
					<a href="<?php echo get_permalink($post['ID']); ?>" class="carousel-principal__button">Ler mais</a>
				</div>
			</div>
		<?php endforeach;
		wp_reset_query(); ?>
	</div>
	<div class="swiper-button-next main"></div>
	<div class="swiper-button-prev main"></div>
</div>
