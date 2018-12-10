            <!--Section: Cards-->
            <section class="pt-5">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                <?php

              // The Query
              $args = array('post_type'=>'desc');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
                $active = 'active';
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','desc');
                  $active = '';
                }
  
                /* Restore original Post Data */
                wp_reset_postdata();
       
            
              ?>
                </div>
                <!-- Heading & Description -->

            </section>
            <!--Section: Cards-->