<?php
/*
Template Name:  Œuvre Single
*/

get_header(); ?>
<main class="main l-oeuvre">
  <?php get_template_part('parts/nav') ?>

  <?php // Gestion de la cover ?>

  <section class="cover cover__small cover__nocolor">
    <div class="cover__container isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php the_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">

          <?php // Info sur la couverture : Année de production ?>

          <?php if( get_field('oeu__date') ): ?>
            <span><?php _e("Année de production : ","lesailleurs") ?><?php the_field('oeu__date'); ?></span>
          <?php endif; ?>

          <?php // Info sur la couverture : Pays ?>

          <?php $terms = get_field('oeu__pays');
          if( $terms ): ?>
          <span>
            <?php _e("Pays : ","lesailleurs") ?>
            <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>

        <?php // Info sur la couverture : Duré ?>

        <?php if( get_field('oeu__duree') ): ?>
          <span><?php _e("Durée : ","lesailleurs") ?><?php the_field('oeu__duree'); ?> min</span>


          <?php // Info sur la couverture : Format ?>

          <?php $terms = get_field('oeu__format');
          if( $terms ): ?>
          <span>
            <?php _e("Format : ","lesailleurs") ?>
            <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>

        <?php // Info sur la couverture : Première ?>

        <?php $terms = get_field('oeu__premiere');
        if( $terms ): ?>
        <span>
          <?php _e("Première : ","lesailleurs") ?>
          <?php foreach( $terms as $term ): ?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
          <?php endforeach; ?>
        </span>
      <?php endif; ?>

    <?php endif; ?>

  </div>
</div>
</div>
</section>

<?php // Description ? ?>

<?php get_template_part('blocks/block__editorblocksystem') ?>

<?php // Ajout des thématiques ? ?>

<?php $terms = get_field('oeu__thematique');
if( $terms ): ?>
<section class="thm">
  <div class="thm__container l6 m3">
    <div class="row thm__title">
    <h2 class="display1">
      <?php _e("Thématiques","lesailleurs") ?>
    </h2>
  </div>
    <div class="row thm__thms">
      <?php foreach( $terms as $term ): ?>
        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn btn--outline">#<?php echo esc_html( $term->name ); ?></a>
      <?php endforeach; ?>
    </div>
    <div class="row thm__more">
      <div class="divider"></div>
      <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn btn--outline"><?php _e("Voir toutes les thématiques","lesailleurs") ?></a>
      <p class="body color__legende"><?php _e("Les Ailleurs explorent. Jamais ne tourne en rond. Alors perdez-vous avec nous.","lesailleurs") ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php // Trailer video & co. ? ?>

<?php get_template_part('blocks/block__teaser-video') ?>

<?php // Les artistes principaux ?>

<?php
$featured_posts  = get_field('oeu__main-auteurs');
if( $featured_posts ): ?>
<div class="row oeu__main-auteurs">
  <div class="m3">
    <h2 class="subheading"><?php _e("Artites principaux","lesailleurs") ?></h2>
    <div class="divider"></div>
  </div>
  <ul class="l-auteurs__items l12">
    <?php foreach( $featured_posts  as $post ):
      setup_postdata($post); ?>
      <?php get_template_part('parts/part__template-auteur') ?>
    <?php endforeach; ?>
  </ul>
  <?php
  wp_reset_postdata(); ?>
</div>
<?php endif; ?>

<?php // Time for Galery ! ?>

<?php get_template_part('blocks/block__galerie-img') ?>



<?php // Chaud pour une p'tite équipe des familles ? ?>

<section class="oeu__equipe">

  <?php // Première étape : récupérer les professions ?>

  <?php if( have_rows('oeu__equipe') ): ?>
    <div class="col l4">
      <h2 class="display1"><?php _e("Générique","lesailleurs") ?></h2>
    </div>
    <ul class="oeu__equipe-items col l8">
      <?php while( have_rows('oeu__equipe') ): the_row(); ?>
        <li class="oeu__equipe-item">
          <?php
          $terms = get_sub_field('oeu__profession');
          if( $terms ): ?>
          <ul class="oeu__professions">
            <?php foreach( $terms as $term ): ?>
              <li class="oeu__profession">
                <h3 class="oeu__profession-title lead_paragraph"><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a></h3>

                <?php // Seconde étape : récupérer les pro de cette professions ?>

                <?php if( have_rows('oeu_qqn') ): ?>
                  <ul class="oeu_qqns">
                    <?php while( have_rows('oeu_qqn') ): the_row(); ?>
                      <li class="oeu_qqn">

                        <?php // Alors, c'est vrai que l'on ajouté un groupe pour simplifier l'interface du backoffice. Conséquence : ce fichier.php est un peu complexe. Courage ! ?>

                        <?php if( have_rows('oeu_grp') ): ?>
                          <?php while( have_rows('oeu_grp') ): the_row(); ?>
                            <?php if( get_sub_field('oeu__team-url') ): ?>
                              <p class="lead_paragraph"><a href="<?php the_sub_field('oeu__team-url'); ?>" target="_blank"><?php the_sub_field('oeu__team'); ?></a></p>
                            <?php else: ?>
                              <?php if( get_sub_field('oeu__team') ): ?>
                                <p class="lead_paragraph"><?php the_sub_field('oeu__team'); ?></p>
                              <?php endif; ?>
                            <?php endif; ?>

                            <?php $oeu__auteurs = get_sub_field('oeu__auteurs'); ?>
                            <?php if( $oeu__auteurs ): ?>
                              <?php $permalink = get_permalink( $oeu__auteurs->ID ); ?>
                              <?php $title = get_the_title( $oeu__auteurs->ID ); ?>
                              <p class="lead_paragraph"><a href="<?php echo esc_html($permalink ); ?>"><?php echo esc_html($title ); ?></a></p>
                            <?php endif; ?>


                          <?php endwhile; ?>
                        <?php endif; ?>

                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>

              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


</section>


</main>

<?php get_footer(); ?>
