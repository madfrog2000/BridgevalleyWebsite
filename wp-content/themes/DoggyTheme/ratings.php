<!-- Section: Testimonials v.3 -->
<section class="team-section text-center my-5">

  <!--Grid row-->
  <div class="row text-center">
  
              <?php

              // The Query
              $args = array('post_type'=>'ratings');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
                $active = 'active';
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','ratings');
                  $active = '';
                }
  
                /* Restore original Post Data */
                wp_reset_postdata();
       
            
              ?> 

  </div>
  <!--Grid row-->

</section>
<!-- Section: Testimonials v.3 -->