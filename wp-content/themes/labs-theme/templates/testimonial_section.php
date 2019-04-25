             <?php
              wp_reset_query();
              $args = [
                'post_type' => 'temoignages',
                'posts_per_page' => 6,
              ]; ?>
             <!-- Testimonial section -->
             <div class="testimonial-section pb100">
               <div class="test-overlay"></div>
               <div class="container">
                 <div class="row">

                   <div class="col-md-8 col-md-offset-4">
                     <div class="section-title left">
                       <h2> <?php
                            $monTxt = get_theme_mod('testi_id_text');
                            $monTxt = str_replace("[", "<span>", $monTxt);
                            $monTxt = str_replace("]", "</span>", $monTxt);
                            echo $monTxt;
                            ?></h2>
                     </div>
                     <div class="owl-carousel" id="testimonial-slide">
                       <!-- single testimonial -->
                       <?php $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post();
                          ?>
                         <div class="testimonial">
                           <span>‘​‌‘​‌</span>

                           <p>
                             <?php the_content(); ?>
                           </p>
                           <div class="client-info">
                             <div class="avatar">
                               <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                             </div>
                             <div class="client-name">
                               <h2>
                                 <?php the_title(); ?>
                               </h2>
                               <p><?= get_post_meta(get_the_ID(), 'nom_testi', true); ?></p>
                             </div>
                           </div>
                         </div>

                         <?php wp_reset_query(); ?>
                       <?php endwhile;
                      wp_reset_postdata();
                      ?>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <!-- Testimonial section end-->