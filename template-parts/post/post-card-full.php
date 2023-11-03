<div class="c-card c-card--full">
	<div class="c-card__thumb"
		style="background-image:url(<?php echo get_the_post_thumbnail_url($args['postId']); ?>)">
	</div>
	<div class="c-card__content">
		<h3>
			<?php
				if ( $args['postId'] ) {
					echo get_the_title($args['postId']);
				}
			?>
		</h3>
		<p>Dictum scelerisque nulla senectus tortor quam feugiat id nulla. Nibh orci, pulvinar ullamcorper dis potenti scelerisque sed.</p>
	</div>
</div>

