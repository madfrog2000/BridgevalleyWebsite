            <!--Section: Cards-->
            <section class="pt-5">

                <div class="news-container">
                    
                
                <?php

                  // The Query
                  $args = array('post_type'=>'news','orderby'=>'post_date','order'=>'ASC','posts_per_page'=>-1);
                  $the_query = new WP_Query( $args );

                  // The Loop
           
                    while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      get_template_part('content','news');
                     
                    }
      
                    /* Restore original Post Data */
                    wp_reset_postdata();


           
                
                ?>    
                </div>                


                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue news-paginator">

                        <!--Arrow left-->
                     <!--    <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li> -->

                        <!-- <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li> -->

                       <!--  <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li> -->

                        <!-- <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->