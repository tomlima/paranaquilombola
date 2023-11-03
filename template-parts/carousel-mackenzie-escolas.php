<!-- Slider main container -->
<div>
	<a href="https://novomackenzie.nznvaas.io/profissoes-360/">
		<h2 class="carousel__title carousel__title--profissoes">MACKENZIE PARA ESCOLAS</h2>
	</a>
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->

			<?php
			// Query
			$the_query = new WP_Query(array(
				'category_name' => 'dicas-pais',
				'post_status' => 'publish',
				'posts_per_page' => 6,
			));
			?>

			<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) :  $the_query->the_post(); ?>

					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
					<?php $imageAlt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', TRUE); ?>
					<?php $categoryName  = get_the_category(get_the_ID())[0]->name; ?>

					<div class="swiper-slide" style="width: 18rem;">
						<div class="carousel__card">
							<a class="carousel__card--thumb" href="<?php echo get_permalink(get_the_ID()); ?>">
								<?php if (strlen($image[0]) > 0) : ?>
									<?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'fluid')); ?>
								<?php else :  ?>
									<img src="https://novomackenzie.nznvaas.io/wp-content/uploads/2020/12/sem_imagem.jpg" alt="Sem imagem">
								<?php endif; ?>
								<div class="carousel__card--category--left carousel__categoy--profissoes"><?php echo $categoryName; ?></div>
							</a>
							<div class="carousel__info">
								<span class="carousel__info--icon"><img src="https://blog.mackenzie.br/wp-content/uploads/2021/02/clock2.png" alt="3 min. de leitura"></span>
								<span class="carousel__info--label"><?php tempo_leitura(); ?> min. de leitura</span>
							</div>
							<h3>
								<a class="carousel__card--title" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php __('No News'); ?></p>
			<?php endif; ?>
		</div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>
