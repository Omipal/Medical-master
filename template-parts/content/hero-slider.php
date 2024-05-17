<?php if( have_rows('slides') ): ?> 
  <div class="hero-slider">
    <?php while( have_rows('slides') ): the_row(); 
        $image = get_sub_field('image'); 
        $heading = get_sub_field('heading');
        $textarea =  get_sub_field('description');
        ?>
      
      <div class="slider-item slide1" style="background-image:url(<?php echo $image['url']; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2"><?php echo  $heading; ?></h2>
                        <p class="tag-text mb-5"><?php echo $textarea; ?></p>
                              <?php
                                  $buttons = get_sub_field( 'button' );
                                  // Create a comma-separated list from selected values.
                                  if( $buttons == 'showBtn' ): ?>
                                   <a href="#" class="btn btn-main btn-white">explore</a>
                                
                                  <?php endif; ?>     
                       
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
       
       
    <?php endwhile; ?>
</div>
<?php endif; ?>