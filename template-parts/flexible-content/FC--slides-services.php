<!--Service Section-->

<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3><?php echo get_sub_field('slider_heading'); ?></h3>
            <p><?php echo get_sub_field('slider_description'); ?></p>
        </div>
        <div class="row items-container clearfix">
        <?php if( have_rows('slides') ):   
        while( have_rows('slides') ): the_row();  
            $image = get_sub_field('image_slide'); 
            $imagelink = get_sub_field('image_slide_link'); 
            $subheading = get_sub_field('sub_heading'); 
            $heading =  get_sub_field('heading');
            $headinglink =  get_sub_field('heading_link');
            $textarea =  get_sub_field('description');
        ?>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="<?php echo $imagelink; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span><?php echo $subheading; ?></span>
                        <a href="<?php echo $headinglink; ?>">
                            <h6><?php echo $heading; ?></h6>
                        </a>
                        <p><?php echo $textarea; ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!--End Service Section-->