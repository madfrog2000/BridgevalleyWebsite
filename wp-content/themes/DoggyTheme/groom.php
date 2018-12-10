<!-- Section: Blog v.1 -->
<section class="my-5">

  <?php

    // The Query
    $args = array('post_type'=>'groom');
    $the_query = new WP_Query( $args );

    // The Loop
           
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content','groom');
      }               
      
      /* Restore original Post Data */
      wp_reset_postdata();           
  ?>    

</section>
<!-- Section: Blog v.1 -->