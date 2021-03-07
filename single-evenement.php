<?php
/*
Template Name: Événement Single
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-evenement">
  <?php // Gestion de la cover ?>

  <section class="cover cover__big cover cover__big cover__color09">
    <div class="cover__container cover__image">
      <?php $image = get_sub_field('cover__img'); ?>
      <?php if( has_post_thumbnail() ): ?>
        <div class="image-full">
          <div class="image-full__nocrop">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      <?php else: ?>
      <div class="cover__is--empty"></div>
    <?php endif; ?>
  </div>
    <div class="cover__container cover__text isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php the_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">


          <?php // Info sur la couverture : Lieu ?>


          <?php if( get_field('eve__lieu') ): ?>
            <span>
              <?php _e("Lieu : ","lesailleurs") ?>
              <a href="<?php the_field('eve__lieu-url') ?>" target="_blank"><?php the_field('eve__lieu'); if( get_field('eve__lieu') ): ?>, <?php the_field('eve__lieu-ville') ?><?php endif; ?></a>
            </span>
          <?php endif; ?>


          <?php // Info sur la couverture : Date ?>

          <?php if( get_field('eve__start') ): ?>
            <span>
              <?php _e("Date : ","lesailleurs") ?>
              <?php if( get_field('eve__end') ): ?>
                du
              <?php endif; ?>
              <?php the_field('eve__start') ?>
              <?php if( get_field('eve__end') ): ?>
                <br>au
                <?php the_field('eve__end') ?>
              <?php endif; ?>
            </span>
          <?php endif; ?>


          <?php // Info sur la couverture : Type d'événement ?>

          <?php $terms = get_field('eve__filtre');
          if( $terms ): ?>
          <span class="liste__de__lien">
            <?php _e("Type d'événement : ","lesailleurs") ?>
            <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>

        <?php // Info sur la couverture : Modalité ?>

        <?php $terms = get_field('eve__modalite');
        if( $terms ): ?>
        <span class="liste__de__lien">
          <?php _e("Modalité : ","lesailleurs") ?>
          <?php foreach( $terms as $term ): ?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
          <?php endforeach; ?>
        </span>
      <?php endif; ?>


      <?php // Info sur la couverture : Intervenant ?>

      <?php if( have_rows('eve__qqn') ): ?>
        <span class="eve_qqns liste__de__lien">
          <?php _e("Intervenant : ","lesailleurs") ?>
          <?php while( have_rows('eve__qqn') ): the_row(); ?>
            <?php // Alors, c'est vrai que l'on ajouté un groupe pour simplifier l'interface du backoffice. Conséquence : ce fichier.php est un peu complexe. Courage ! ?>
            <?php if( have_rows('eve_grp') ): ?>
              <?php while( have_rows('eve_grp') ): the_row(); ?>
                <?php if( get_sub_field('eve__team-url') ): ?>
                  <a href="<?php the_sub_field('eve__team-url'); ?>" target="_blank"><?php the_sub_field('eve__team'); ?></a>
                <?php else: ?>
                  <?php if( get_sub_field('eve__team') ): ?>
                    <a><?php the_sub_field('eve__team'); ?></a>
                  <?php endif; ?>
                <?php endif; ?>
                <?php $eve__auteurs = get_sub_field('eve__auteurs'); ?>
                <?php if( $eve__auteurs ): ?>
                  <?php $permalink = get_permalink( $eve__auteurs->ID ); ?>
                  <?php $title = get_the_title( $eve__auteurs->ID ); ?>
                  <a href="<?php echo esc_html($permalink ); ?>"><?php echo esc_html($title ); ?></a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        </span>
      <?php endif; ?>

    </div>
  </div>
</div>

<?php // Ajout du boutton Scroll Down ?>

<div class="cover__scroll-down">
  <?php get_template_part('assets/img/inline', 'icon_scroll-down.svg'); ?>
</div>

</section>

<?php // Description ? ?>

<?php get_template_part('blocks/block__editorblocksystem') ?>

<?php // Ajout des thématiques ? ?>

<?php $terms = get_field('eve__thematique');
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

<?php // Time for Galery ! ?>

<?php get_template_part('blocks/block__galerie-img') ?>



</main>

<?php get_footer(); ?>
