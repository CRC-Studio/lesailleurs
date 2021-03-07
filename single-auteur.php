<?php
/*
Template Name:  Auteur Single
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

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
  <section class="row white--isnt--white">
    <div class="col l6 m1">
      <h2 class="subheading"><?php _e("Œuvres présentées aux AiIlleurs","lesailleurs") ?></h2>
      <div class="divider"></div>
    </div>
    <div class="l-gallery__container">
      <?php foreach( $oeuvres as $oeuvre ): ?>
        <?php $post = $oeuvre; ?>
        <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
        <article class="slc__slc slc__lar6 slc__marh5 isf__vit2 is--zoooom is--float" onclick="location.href='<?php the_permalink(); ?>'">
          <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
        </article>
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
              get_template_part('parts/part__template-evenement-single'); // Si oui, on affiche l'évenement
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
    'posts_per_page'  => -1
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
      <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="is--denko">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <span><?php the_title(); ?></span>
        <?php endwhile; ?>
      </a>
    </li>
  </ul>
<?php endif; wp_reset_query(); ?>


<?php get_footer(); ?>
