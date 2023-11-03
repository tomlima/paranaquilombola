<div class="c-card c-card--minimal">
	<div class="c-card__content">
		<h3>
			<?php
				if ( $args['postId'] ) {
					echo get_the_title($args['postId']);
				}
			?>
		</h3>
		<span>09-Mar 12:45</span>
	</div>
</div>

