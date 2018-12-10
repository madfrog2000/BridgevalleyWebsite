
<!-- Grid row -->
<div class="row">

              <?php

              // The Query
              $args = array('post_type'=>'photos');
              $the_query = new WP_Query( $args );

              // The Loop
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','photo');
                }
  
                /* Restore original Post Data */
                wp_reset_postdata();
       
            
              ?>    

</div>
<!-- Grid row -->

