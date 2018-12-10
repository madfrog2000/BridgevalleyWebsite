            <?php 
            global $active;
             ?>
            <div class="carousel-item <?php echo $active; ?>"">
              <img class="d-block w-100" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
            </div>