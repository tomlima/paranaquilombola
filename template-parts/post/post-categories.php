<section class="c-category">
	<div class="l-container">
		<div class="c-category__wrapper">
			<div>
				<div class="c-carousel">
					<div class="c-carousel__container">
						<?php
							$categories = get_categories( array(
								'orderby' => 'id',
								'order'   => 'ASC',
								'exclude' => 1
							));

						foreach( $categories as $category ) { ?>

							<div class="c-carousel__slide" data-slideIndex="<?php echo "slide".$category->term_id; ?>">
								<div class="c-card">
									<div class="c-card__inner  l-flex u-align-items-center u-justify-items-center <?php if($category->term_id == 2){ echo "is-active"; } ?>">
										<span><?php echo $category->name; ?></span>
									</div>
								</div>
							</div>

						<?php } ?>
					</div>
					<div
						id="back-button"
						class="o-arrow o-arrow--left"
					>
						<i class="bx bx-chevron-left"></i>
					</div>
					<div class="o-arrow o-arrow--right">
						<i class="bx bx-chevron-right"></i>
					</div>
				</div>
			</div>
		</div>
  </div>
</section>
