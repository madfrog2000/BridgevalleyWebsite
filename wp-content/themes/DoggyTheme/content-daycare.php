<!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5"><?php the_title(); ?></h2>
  <!-- Grid row -->
  <div class="row">
    
        <!-- Grid column -->
    <div class="col-lg-7">
      <!-- Excerpt -->
      <p><?php the_content(); ?></p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="<?php the_field('image'); ?>" alt="Grooming">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->



  </div>