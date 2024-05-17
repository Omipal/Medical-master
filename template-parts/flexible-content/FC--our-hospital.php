<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3><?php echo get_sub_field('heading'); ?></h3>
						<p><?php echo get_sub_field('description'); ?></p>
					</div>
					<div class="row">
					<?php if( have_rows('work_slides') ):   
        while( have_rows('work_slides') ): the_row();  
						$imagelink = get_sub_field('work_link');
            $image = get_sub_field('image_slide');
						$heading = get_sub_field('heading');
						$textarea = get_sub_field('description');
						  

        ?>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="<?php echo $imagelink; ?>">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
										</a>
									</figure>
								</div>
								<h6><?php echo $heading; ?></h6>
								<p><?php echo $textarea; ?></p>
							</div>
						</div>
						<?php endwhile; ?>
            <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->