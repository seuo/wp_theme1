<!-- Team -->
<div class="container team">
      <div class="page-header-title">
        <h2 class="heading-title text-center">Team Members</h2>
      </div>
      <div class="team-members mtb-50">
        <div class="row">

          
            <?php // The Query
                  $args = array('post_type' => 'Members');

                  $the_query = new WP_Query( $args );
                  
                  // The Loop
                 
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post();
                          get_template_part('partials/content','member');
                      }
                    
                  /* Restore original Post Data */
                  wp_reset_postdata(); //always reset after custom loop
                ?>



           
         
          </div>
        </div>

    </div>