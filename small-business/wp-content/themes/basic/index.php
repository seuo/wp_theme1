
<?php get_header()?>
 
    <!-- Container -->
    <div class="container index">

      <?php 
         while (have_posts()) :
                the_post();
                
                get_template_part('partials/content','index');
         endwhile;
         ?>
 
    </div>

<?php get_footer()?>

  

  