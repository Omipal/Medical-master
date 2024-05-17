<!-- Contact Section -->
<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="accordion-section">
    <div class="section-title">
        <h3><?php echo  get_sub_field('heading'); ?></h3>
    </div>
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php if(have_rows('accordion_contents')): 
              while (have_rows('accordion_contents')): the_row();
              $heading = get_sub_field('heading');
              $content = get_sub_field('content');
            ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $heading; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    <?php echo  $content; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
    <div class="section-title">
        <h3><?php echo  get_sub_field('appointment_heading'); ?></h3>
    </div>
    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Departments</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <select name="subject">
                        <option>Doctor</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-style-one">submit now</button>
                </div>
            </div>
        </div>
    </form>
</div>                        
            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->