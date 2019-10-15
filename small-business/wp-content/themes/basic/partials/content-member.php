<div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php the_field('photo')?>" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white"><?php the_content()?></p>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="<?php the_field('facebook')?>"><i class="fa fa-facebook"></i></a>
                      <a class="twitter" href="<?php the_field('twitter')?>"><i class="fa fa-twitter"></i></a>
                      <a class="google-plus" href="<?php the_field('instagram')?>"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                    <?php the_title()?>
                </h2>
                <p>
                    <?php the_field('position')?>
                </p>
              </div>
            </div>
 <!-- Team Item Ends -->
 </div>