<!-- About section -->
<div class="about-section">
  <div class="overlay"></div>
  <!-- card section -->
  <div class="card-section">
    <div class="container">
      <div class="row">
        <!-- single card -->
        <?php
        wp_reset_query();
        $args = [
          'post_type' => 'service',
          'orderby' => 'rand',
          'posts_per_page' => 3,
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="lab-card">
              <div class="icon">
                <i class="<?= get_post_meta(get_the_ID(),'icones_services',true); ?>"></i>
              </div>
              <h2>
              <?php the_title(); ?>
              </h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
          <?php wp_reset_query(); ?>
        <?php endwhile;
      wp_reset_postdata();
      ?>

      </div>
    </div>
  </div>
  <!-- card section end-->


  <!-- About contant -->
  <div class="about-contant">
    <div class="container">
      <div class="section-title">
        <h2>
          <?php
          $monTxt = get_theme_mod('about_id_text');
          $monTxt = str_replace("[", "<span>", $monTxt);
          $monTxt = str_replace("]", "</span>", $monTxt);
          echo $monTxt;
          ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p><?php echo get_theme_mod('about_id_colonne1') ?></p>
        </div>
        <div class="col-md-6">
          <p><?php echo get_theme_mod('about_id_colonne2') ?></p>
        </div>
      </div>
      <div class="text-center mt60">
        <a href="" class="site-btn">Browse</a>
      </div>
      <!-- popup video -->
      <div class="intro-video">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <img src="<?php echo get_theme_mod('about_id_vignette_video') ?>">
            <a href="<?php echo get_theme_mod('about_id_video') ?>" class="video-popup">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>





      </div>
    </div>
  </div>
</div>
<!-- About section end -->