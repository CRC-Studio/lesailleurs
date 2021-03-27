<?php
/*
Template Name:  Auteur Single
*/

get_header();
get_template_part('parts/nav');
?>

<?php $auteur = get_the_title(); // Note : on stocke le nom de l'auteur pour pouvoir trier les événements un peu plus bas.  ?>


<main class="main l-auteur">


  <?php // Gestion de la cover ?>

  <section class="cover cover__small cover__nocolor">
    <div class="cover__container cover__text isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php the_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">

          <?php // Info sur la couverture : Nationalite ?>

          <?php $terms = get_field('art__profession');
          if( $terms ): ?>
          <span class="liste__de__lien">
            <?php _e("Profession : ","lesailleurs") ?>
            <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>

        <?php // Info sur la couverture : Nationalité ?>

        <?php $terms = get_field('art__nationalite');
        if( $terms ): ?>
        <span class="liste__de__lien">
          <?php _e("Nationalité : ","lesailleurs") ?>
          <?php foreach( $terms as $term ): ?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
          <?php endforeach; ?>
        </span>
      <?php endif; ?>


    </div>
  </div>
</div>
</section>

<?php // Description ? ?>

<?php get_template_part('blocks/block__editorblocksystem') ?>


<?php // Oeuvres ? ?>

<?php $oeuvres = get_posts(array(
  'post_type'       => 'oeuvre',
  'posts_per_page'  => -1,
  'meta_query'      => array(
    array(
      'key' => 'oeu__main-auteurs',
      'value' => '"' . get_the_ID() . '"',
      'compare' => 'LIKE'
    )
  )
));
?>
<?php if( $oeuvres ): ?>
  <section class="row">
    <div class="col l6 m1">
      <h2 class="subheading"><?php _e("Œuvres présentées aux AiIlleurs","lesailleurs") ?></h2>
      <div class="divider"></div>
    </div>
    <div class="l-gallery__container">
      <?php foreach( $oeuvres as $oeuvre ): ?>
        <?php $post = $oeuvre; ?>
        <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>

        <?php
        // Paramètre pour la première oeuvre de la Selection
        $slc__lar = 5;
        $slc__marh = 5;
        $slc__marv = 1;
        $isf__vit = 1;

        $args = array(
          'numberposts'	=> -1,
          'post_type'		=> 'selection',
          'meta_query' => array(
            'relation' => 'AND',
            array(
              'key' => 'slc_$_slc__oeuvre', // name of custom field
              'value' => get_the_ID(),
              'compare' => '='
            )
          )
        );
        $backup_post = $post;
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
          while ( $the_query->have_posts() ) : $the_query->the_post();

          // On explore la sélection

          if( have_rows('slc') ):
            while( have_rows('slc') ) : the_row();

            // On cherche si des oeuvres ont des mentions

            $terms = get_sub_field('slc__mention');
            if( $terms ):
              foreach( $terms as $term ):

                // On affiche les oeuvres avec des mentions

                $slc__labeltext = esc_html( $term->name )." ".get_the_title();
                set_query_var( 'slc__labeltext', $slc__labeltext );
                $post = get_sub_field('slc__oeuvre');
                setup_postdata($post); // Setup this post for WP functions (variable must be named $post).
                ?>
                <article class="slc__slc is--float <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>  is--zoooom tooltip--hover" onclick="location.href='<?php the_permalink(); ?>'">
                  <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
                  <?php get_template_part('parts/part__slc__label', 'slc__labeltext'); ?>
                </article>
                <?php
                wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly
                $post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata();
              endforeach;


              // On affiche les oeuvres sans mentions

            else:
              $post = get_sub_field('slc__oeuvre');
              setup_postdata($post); // Setup this post for WP functions (variable must be named $post).
              ?>
              <article class="slc__slc is--float <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>  is--zoooom tooltip--hover" onclick="location.href='<?php the_permalink(); ?>'">
                <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
              </article>
              <?php
              wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly
              $post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata();

            endif;
          endwhile;
        endif;
      endwhile;
    else:

      // On affiche des oeuvres sans sélection
      ?>
      <article class="slc__slc is--float <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>  is--zoooom" onclick="location.href='<?php the_permalink(); ?>'">
        <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
      </article>
      <?php

    endif;
    wp_reset_query(); $post = $backup_post; ?>

    <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.?>
  <?php endforeach; ?>
</div>
</section>
<?php endif; ?>



<?php // Événements ? ?>
<?php
// Note : l'Auteur étant dans un groupe, lui même dans un reapter
// du custom type evenement, nous n'avons pas trouvé de meilleur solution
// de sortir tous les événements, puis d'afficher uniquement ceux avec l'Auteur.
?>

<?php $loop = new WP_Query(
  array(
    'post_type'       => 'evenement',
    'order'           => 'ASC',
    'meta_key'  			=> 'eve__start',
    'orderby'		    	=> 'meta_value',
    'posts_per_page'  => -1
  )
);
if ($loop->have_posts()) :?>


<section class="eve row">
  <div class="col l6">
    <h2 class="subheading"><?php _e("Évévenments avec","lesailleurs") ?> <?php the_title(); ?></h2>
    <div class="divider"></div>
  </div>
  <?php get_template_part('parts/part__eve-bar') ?>
  <ul>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php // On sort le nom des intervenants
      $evenement = $post;
      $backup_post = $post; // Utile pour relancer la loop après un wp_reset_postdata();
      if( have_rows('eve__qqn') ): // Début du repeater eve__qqn
        while( have_rows('eve__qqn') ): the_row();
        if( have_rows('eve_grp') ):  // Début du goupre eve_grp
          while( have_rows('eve_grp') ): the_row();
          $post = get_sub_field('eve__auteurs'); // Recherche dans l'Objet Publication Fields
          if( $post ):
            setup_postdata($post);

            $intervenant = get_the_title();

            if ($intervenant == $auteur) { // On test si l'intervenant est l'auteur
              $post = $evenement;
              setup_postdata($post);
              get_template_part('parts/part__eve-single'); // Si oui, on affiche l'évenement
              wp_reset_postdata();
            }
            wp_reset_postdata();   // Reset the global post object so that the rest of the page works correctly.
          endif;
        endwhile; $post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata();
      endif; // Fin du goupre eve_grp
    endwhile;
  endif; // Fin du repeater eve__qqn
  $post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata();
  ?>


<?php endwhile; ?>
</ul>
</section>
<?php endif; wp_reset_query(); ?>


<?php // Découvrir d'autres auteurs ?>

<?php $loop = new WP_Query(
  array(
    'post_type'       => 'auteur',
    'orderby'         => 'rand',
    'order'           => 'ASC',
    'posts_per_page'  => 5
  )
);
if ($loop->have_posts()) :?>


<section>
  <div class="col l6 m2">
    <h2 class="subheading"><?php _e("Rencontrer d'autres auteurs","lesailleurs") ?></h2>
    <div class="divider"></div>
  </div>
</section>

<ul class="l-auteurs__items l12">
  <li class="l-auteurs__item display3 l12">
    <a href="<?php echo get_polypage_link('auteurs'); ?>" title="<?php the_title()?>" class="is--denko">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <span><?php the_title(); ?></span>
      <?php endwhile; ?>
    </a>
  </li>
</ul>
<?php endif; wp_reset_query(); ?>


<?php get_footer(); ?>
