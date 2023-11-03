<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<div class="container mt-5">
		<div class="row">
			<?php while (have_posts()) :
				the_post();
			?>
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
				<?php $imageAlt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', TRUE); ?>
				<div class="col-sm-4 col-12 mt-5">
					<div class="carousel__card">
						<a class="carousel__card--thumb" href="<?php echo get_permalink(get_the_ID()); ?>">
							<?php if (strlen($image[0]) > 0) : ?>
								<?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'fluid')); ?>

							<?php else :  ?>
								<img src="https://novomackenzie.nznvaas.io/wp-content/uploads/2020/12/sem_imagem.jpg" alt="Sem imagem">
							<?php endif; ?>
							<div class="carousel__card--category--left carousel__categoy--vestibular"><?php echo get_the_category(get_the_ID())[0]->name; ?></div>
						</a>
						<div class="carousel__info">
							<span class="carousel__info--icon"><img src="https://blog.mackenzie.br/wp-content/uploads/2021/02/clock2.png"></span>
							<span class="carousel__info--label"><?php tempo_leitura(); ?> min. de leitura</span>
						</div>
						<h3>
							<a class="carousel__card--title" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
						</h3>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif  ?>;
	<?php get_footer();
