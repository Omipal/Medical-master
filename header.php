<?php
/**
 * The header for our theme 
 * */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title></title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="page-wrapper site" id="page">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Medic' ); ?></a>  
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                  <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$custom_description = get_bloginfo( 'description', 'display' );
			if ( $custom_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $custom_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@medic.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="#" class="btn-style-one">Appoinment</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
                  wp_nav_menu(array(
                     'theme_location' => 'main-menu',
                     'menu_class' => 'nav navbar-nav',
                     'container' => '',
                     'walker' => new medic_Walker_Nav_Menu()   
                  ));
                  ?>
                  <!-- <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.html">Home</a>
                        </li>
                        <li>
                              <a href="about.html">About</a>
                        </li>
                        <li>
                              <a href="service.html">Service</a>
                        </li>
                        <li>
                              <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                              <a href="team.html">Team</a>
                        </li>
                        <li>
                              <a href="appointment.html">Appointment</a>
                        </li>
                        <li>
                              <a href="blog.html">Blog</a>
                        </li>
                        <li>
                              <a href="contact.html">Contact</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li>
                  </ul> -->
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->