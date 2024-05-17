<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3><?php echo get_sub_field('heading'); ?></h3>
        </div>
        <div class="testimonial-carousel">
          <?php if(have_rows('slide')): 
              while (have_rows('slide')): the_row();
              $image = get_sub_field('image_slide');
              $heading = get_sub_field('heading');
              $textarea = get_sub_field('description');
            ?>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </figure>
                    </div>
                    <h6><?php echo $heading; ?></h6>
                    <p><?php echo  $textarea; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--End testimonial-section-->