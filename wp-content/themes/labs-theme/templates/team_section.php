 <!-- Team Section -->
 <div class="team-section spad">
   <div class="overlay"></div>
   <div class="container">
     <div class="section-title">
       <h2>
         <?php
          $monTxt = get_theme_mod('team_id');
          $monTxt = str_replace("[", "<span>", $monTxt);
          $monTxt = str_replace("]", "</span>", $monTxt);
          echo $monTxt;
          ?>
       </h2>
     </div>
     <div class="row">
       <!-- single member -->
       <?php
        wp_reset_query();
        $args = [
          'post_type' => 'Team',
          'posts_per_page' =>1,
          'category_name' => 'B',
        ];
        wp_reset_query();
        $args2 = [
          'post_type' => 'Team',
          'orderby' => 'rand',
          'posts_per_page' => 1,
          'category_name' => 'A',
        ];


        $query2 = new WP_Query($args2);
        while ($query2->have_posts()) : $query2->the_post();
          ?>
         <div class="col-sm-4">
           <div class="member">
             <img src="<?php the_post_thumbnail_url(); ?>" alt="">
             <h2>
               <?php the_title(); ?>
             </h2>
             <h3>
               <?php the_content(); ?>
             </h3>
           </div>
         </div>
         <?php wp_reset_query(); ?>
       <?php endwhile;
      wp_reset_postdata();
      ?>

       <?php
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
          ?>
         <div class="col-sm-4">
           <div class="member">
             <img src="<?php the_post_thumbnail_url(); ?>" alt="">
             <h2>
               <?php the_title(); ?>
             </h2>
             <h3>
               <?php the_content(); ?>
             </h3>
           </div>
         </div>
         <?php wp_reset_query(); ?>
       <?php endwhile;
      wp_reset_postdata();
      ?>

       <?php
        $query3 = new WP_Query($args2);
        while ($query3->have_posts()) : $query3->the_post();
          ?>
         <div class="col-sm-4">
           <div class="member">
             <img src="<?php the_post_thumbnail_url(); ?>" alt="">
             <h2>
               <?php the_title(); ?>
             </h2>
             <h3>
               <?php the_content(); ?>
             </h3>
           </div>
         </div>
         <?php wp_reset_query(); ?>
       <?php endwhile;
      wp_reset_postdata();
      ?>
     </div>
   </div>
 </div>

 <!-- Team Section end-->