<?php 
$heading = get_sub_field('heading');
$textarea =  get_sub_field('description');
?>

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3><?php echo $heading; ?></h3>
            <p><?php echo $textarea; ?></p>
        </div>
        <div class="row">
        <?php if( have_rows('cards') ):    
         while( have_rows('cards') ): the_row(); 
          $image = get_sub_field('image'); 
          $heading = get_sub_field('heading');
          $textarea =  get_sub_field('description');
          $btntext =  get_sub_field('btn_text');
          $btnlink =  get_sub_field('btn_link');
        ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="<?php echo $image['url']; ?>" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4><?php echo $heading; ?></h4>
                        <p><?php echo $textarea; ?></p>
                        <a href="<?php $btnlink; ?>" class="btn btn-main"><?php echo $btntext; ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!--End team section-->