<section>
	<div class="l-container">
		<div class="c-post">
			<div class="c-post__wrapper">
				<?php
					$categories = get_categories( array(
						'orderby' => 'id',
						'order'   => 'ASC',
						'exclude' => [1,2]
					));
					foreach( $categories as $category ) {?>



						<div>
							<div class="c-post__category">
								<h2><?php echo $category->name; ?></h2>
								<div></div>
							</div>

							<?php
								$args = array('cat' => $category->term_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 4 ,'post_status' => 'publish');
								$q = new WP_Query( $args );
								query_posts($args);
								global $post;
								if ($q->have_posts()) :
									while ($q->have_posts()) : $q->the_post(); ?>
										<?php
											$postId = get_the_ID();
											if($q->current_post == 0){
												get_template_part('template-parts/post/post-card-full', null, array(
													'postId' => $postId
												));
											}else{
												get_template_part('template-parts/post/post-card-minimal', null, array(
													'postId' => $postId
												));
											}
										?>
								<?php
									endwhile;
								endif;
							?>
						</div>
					<?php } ?>
			</div>
		</div>
	</div>
</section>

