
<?php if( have_rows('par') ): ?>
  <section class="par">

    <?php if( get_field('par__intro') ): ?>
      <div class="row">
        <h2 class="subheading">Partenaires</h2>
        <div class="divider"></div>
        <p class="display1"><?php the_field('par__intro'); ?></p>
      </div>
    <?php endif; ?>

    <ul>
      <?php while( have_rows('par') ): the_row(); ?>
        <li>
          <h3 class="display1"><?php the_sub_field('par__cath'); ?></h3>

          <?php if( have_rows('par__qqn') ): ?>
            <ul class="par_pars row">
              <?php while( have_rows('par__qqn') ): the_row(); ?>

                <?php
                // On récupère la largeur du logo dans le Groupe 01
                $grp01 = get_sub_field('par__grp01');
                if( $grp01 ) { $par__size = $grp01['par__size']; }
                $par__doweknowhim = $grp01['par__do-we-know-him']
                ?>
                <?php if( have_rows('par__grp02') ): ?>
                  <?php while( have_rows('par__grp02') ): the_row(); ?>

                    <?php // On toutes les données avant de les envoyer au Template ?>
                    <?php if ($par__doweknowhim == 'oui'): // Si le partenaire n'est pas dans la base de donnée :
                      $post = get_sub_field('par__partenaire');
                      setup_postdata($post); // Setup this post for WP functions (variable must be named $post).

                      $par__title = get_the_title();
                      $par__sous_title = get_field('par__soustitre');
                      $par__url = get_permalink();
                      $par__logo = get_field('par__logo');

                      wp_reset_postdata();  // Reset the global post object so that the rest of the page works correctly.
                      ?>

                    <?php else: // Si le partenaire n'est pas dans la base de donnée :
                      $par__title = get_sub_field('par__par');
                      $par__sous_title = get_sub_field('par__par-soustitre');
                      $par__url = get_sub_field('par__par-url');
                      $par__logo = get_sub_field('par__par-logo');
                      ?>
                    <?php endif; ?>


                    <?php  // Ici commence le Template ?>


                    <li class="par__par <?php echo $par__size ?>" onclick="location.href='<?php echo $par__url ?>'">
                      <div class="par__wrapper">
                        <div class="par__container">
                          <?php echo wp_get_attachment_image( $par__logo['ID'], 'full' ); ?>
                        </div>
                        <div class="par__overlay">
                          <div>
                            <p class="lead_paragraph"><?php echo $par__title ?></p>
                            <span class="subheading"><?php echo $par__sous_title ?></span>
                          </div>
                          <span class="par__read-more subheading">↘ En savoir plus</span>
                        </div>
                      </div>
                    </li>
                    <?php  // Ici fini le Template ?>


                  <?php endwhile; ?>
                <?php endif; ?>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endwhile; ?>
    </ul>
  </section>
<?php endif; ?>