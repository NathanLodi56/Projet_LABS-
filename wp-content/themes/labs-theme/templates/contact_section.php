<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
      <div class="row">
        <!-- contact info -->
        <div class="col-md-5 col-md-offset-1 contact-info col-push">
          <div class="section-title left">
            <h2><?php echo get_theme_mod('contact_id_titre') ?></h2>
          </div>
          <p><?php echo get_theme_mod('contact_id_textarea') ?> </p>
          <h3 class="mt60"><?php echo get_theme_mod('contact_id_titre_2') ?></h3>
          <?php 
            $test = get_theme_mod('contact_id_lieu_1_2');
            $test = str_replace("/","</br>",$test);
          ?>
          <!-- <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p> -->
          <p class="con-item"><?php echo $test ?></p>
          <p class="con-item"><?php echo get_theme_mod('contact_id_numero_3') ?></p>
          <p class="con-item"><?php echo get_theme_mod('contact_id_mail_4') ?></p>
        </div>
        <!-- contact form -->
        <div class="col-md-6 col-pull">
          <form class="form-class" id="con_form">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name">
              </div>
              <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email">
              </div>
              <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn">send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->
