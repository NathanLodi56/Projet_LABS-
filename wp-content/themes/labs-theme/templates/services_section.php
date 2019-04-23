<!-- Services section -->
<div class="services-section spad">
  <div class="container">
    <div class="section-title dark">
      <h2>
        <?php
        $monTxt = get_theme_mod('services_id');
        $monTxt = str_replace("[", "<span>", $monTxt);
        $monTxt = str_replace("]", "</span>", $monTxt);
        echo $monTxt;
        ?>
      </h2>
    </div>
    <div class="row">
      <?php
      wp_reset_query();
      $args = [
        'post_type' => 'service',
        'posts_per_page' => 9,
      ];
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();
        ?>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <!-- <i class="flaticon-023-flask"></i> -->
              
            </div>
            <div class="service-text">
            <?php while (have_posts()): the_post(); ?>
              <h2>
              <?php the_title(); ?>
              </h2>
              <?php endwhile; ?>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
         <?php wp_reset_query(); ?>
        <?php endwhile; 
        wp_reset_postdata();
        ?>
      </div>
      <div class="text-center">
        <a href="" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->