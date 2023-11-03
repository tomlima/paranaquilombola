<?php get_header(); ?>

<div class="container mt-5">
	<h2 class="carousel__title carousel__title--materias"> <?php single_cat_title(); ?></h2>
	<!-- Super-Banner -->
	<div class="row mt-5 mb-5">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/super-banner'); ?>
		</div>
	</div>
	<!-- Fim banner -->
	<div class="row" style="justify-content: center;">
		<?php
		$category = get_the_category();
		$category_id = get_cat_ID(single_cat_title('', false));
		$args = array('category' => $category_id, 'numberposts' => -1);
		$posts_per_page = 12;
		$posts = get_posts($args);
		$paginated_posts = paginated_posts($posts, $posts_per_page);
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$actual_link_formated = substr($actual_link, 0, strpos($actual_link, "?page"));
		$category_parent = $category[0]->category_parent;

		if ($category_parent != 0) :
			if (!empty($posts)) :
				foreach ($paginated_posts as $post) :	setup_postdata($post);
		?>

					<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
					<?php $imageAlt = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', TRUE); ?>
					<?php $slug = get_post_field('post_name', get_the_ID()); ?>
					<div class="col-sm-4 col-12 mt-5">
						<div class="carousel__card">
							<a class="carousel__card--thumb" href="<?php echo $actual_link_formated . $slug; ?>">
								<?php if (strlen($image[0]) > 0) : ?>
									<?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'fluid')); ?>
								<?php else :  ?>
									<img src="https://novomackenzie.nznvaas.io/wp-content/uploads/2020/12/sem_imagem.jpg" alt="Sem imagem">
								<?php endif; ?>
								<?php get_category_label($category_id); ?>

							</a>
							<div class="carousel__info">
								<span class="carousel__info--icon"><img src="https://blog.mackenzie.br/wp-content/uploads/2021/02/clock2.png" alt="3 min. de leitura"></span>
								<span class="carousel__info--label"><?php tempo_leitura(); ?> min. de leitura</span>
							</div>
							<h3>
								<a class="carousel__card--title" href="<?php echo $actual_link_formated . $slug; ?>"><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
				<?php endforeach; ?>
				<div>
					<ul class="pagination">
						<?php pagination(count($posts), $posts_per_page); ?>
					</ul>
				</div>
			<?php endif; ?>
		<?php else : ?>
			<?php
			$args = array('child_of' => $category_id);
			$categories = get_categories($args);
			foreach ($categories as $category) { ?>

				<div class="col-md-4 col-12">
					<a href="<?php echo  get_category_link($category->term_id); ?>">
						<div class="card__category">
							<h3>
								<?php echo $category->name; ?>
							</h3>
						</div>
					</a>
				</div>
			<?php } ?>
		<?php endif; ?>
	</div>
</div>



<?php get_footer(); ?>
