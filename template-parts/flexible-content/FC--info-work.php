
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <?php echo get_sub_field('phone_icon'); ?>
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                        <a href="#"><?php echo get_sub_field('number'); ?></a>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </div>
                    <div class="top-doctor item">
                    <?php echo get_sub_field('hoscope_icon'); ?>
                        <h2><?php echo get_sub_field('service_heading'); ?></h2>
                        <p><?php echo get_sub_field('service_description'); ?></p>
                        <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-main"><?php echo get_sub_field('link_text'); ?></a>
                    </div>
                    <div class="working-time item">
                    <?php echo get_sub_field('hourglass_icon'); ?>
                        <h2><?php echo get_sub_field('work_heading'); ?></h2>
                        <ul class="w-hours">
                          <?php  if(have_rows('working_hours')):
                              while (have_rows('working_hours')): the_row();
                              $week = get_sub_field('week');
                              $weeknumber = get_sub_field('week_number');
                            ?>
                            <li><?php echo $week; ?><span><?php echo $weeknumber; ?></span></li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>