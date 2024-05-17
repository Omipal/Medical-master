<?php 
/*
  Template Name: Home Page
*/
get_header(); 

 get_template_part( 'template-parts/content/hero', 'slider' );

 // Flexible start
 // Check value exists.
if( have_rows('flexible_content') ):

  // Loop through rows.
  while ( have_rows('flexible_content') ) : the_row();

      // Case: Paragraph layout.
      if( get_row_layout() == 'info_experts' ):
   
          // Echo Info Experts
          echo get_template_part( 'template-parts/flexible-content/FC--info-experts');

      // Case: Download layout.
      elseif( get_row_layout() == 'slides_services' ): 
   
            // Echo slides_services
            echo get_template_part( 'template-parts/flexible-content/FC--slides-services');

      elseif( get_row_layout() == 'our_hospital' ): 

        // Echo sour_hospital
        echo get_template_part( 'template-parts/flexible-content/FC--our-hospital');

      elseif( get_row_layout() == 'slides_patients' ): 

            // Echo slides_patients
      echo get_template_part( 'template-parts/flexible-content/FC--slides-patients');

      elseif( get_row_layout() == 'info_work' ): 

                // Echo info_work
      echo get_template_part( 'template-parts/flexible-content/FC--info-work');   

      elseif( get_row_layout() == 'faq' ): 

            // Echo faq
      echo get_template_part( 'template-parts/flexible-content/FC--faq');
   

      endif;

  // End loop.
  endwhile;

// No value.
else :
  // Do something...
  echo "no flexible content found";
endif;


get_footer();