

<section class="form row bigm">

  <div class="row">
    <?php if( get_field('fom__titre') ): ?>
      <div class="col l5 m1">
        <h2 class="subheading"><?php the_field('fom__titre') ?></h2>
        <div class="divider"></div>
        <?php if( get_field('fom__desc') ): ?>
          <div class="display1"><?php the_field('fom__desc') ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>


  <form action="<?php echo get_stylesheet_directory_uri(); ?>/script/action__send-contact-form.php" method="post">
    <div class="form__input-container ">
      <input type="text" class="form__input-full" placeholder="url" name="url" hidden value="<?php echo get_home_url(); ?>">
      <input type="text" class="form__input-full" placeholder="url" name="the_permalink" hidden value="<?php the_permalink(); ?>">
      <input type="text" class="form__input-half" placeholder="Nom*" name="nom" value="" required>
      <input type="email" class="form__input-half form__input-seperator" placeholder="Email*" name="email" value="" required>
      <input type="text" class="form__input-full" placeholder="Sujet*" name="sujet" value="" required>
      <textarea class="form__input-full" placeholder="Message*" name="message" value="" required></textarea>
    </div>
    <div class="col6 m1">
      <input type="submit" name="submit" value="<?php _e("Envoyer votre message","lesailleurs") ?>" class="btn btn--outline">
    </div>
  </form>

  <?php
  if ( $_GET['message'] == "done"): ?>
  <div class="modal__container">
    <div class="modal__overlay"></div>
    <div class="modal">
      <span class="display1"><?php _e("Merci pour votre message. Il a bien été envoyer. Nous le recevrons ici dans quelques secondes.","lesailleurs") ?></span>
      <div class="divider"></div>
      <span class="subheading"><?php _e("L'équipe des Ailleurs","lesailleurs") ?></span>
      <div class="modal__btn"><?php get_template_part('assets/img/inline', 'icon_close.svg'); ?></div>
    </div>
  </div>
<?php endif; ?>

</div>

</section>
