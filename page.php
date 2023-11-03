<?php get_header(); ?>


<div class="container mt-5">
	<div class="row justify-content-center">
		<?php  echo apply_filters( 'the_content', get_post_field('post_content', $post->ID) ); ?>
	</div>
</div>


<?php get_footer();
