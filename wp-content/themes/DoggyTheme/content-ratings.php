    <!--Grid column-->
    <div class="col-md-4 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="<?php the_field('image'); ?>" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4"><?php the_title(); ?></h4>
        <p class="font-weight-normal dark-grey-text">
          <i class="fa pr-2"></i><?php the_content(); ?></p>
        <!--Review-->
        <div class="orange-text">


          <?php 
            $score = get_field('score');

            for($i=1;$i<=5;$i++){
              if($i<=$score){
                echo '<i class="fa fa-star"></i>';
              }else{
                echo '<i class="fa fa-star-o"></i>';
              }
              
            }
          ?>
        </div>
      </div>

    </div>