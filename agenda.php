<?php
/*
Template Name:  Agenda
*/

get_header(); ?>
  <?php get_template_part('parts/nav') ?>

<main class="main l-agenda">
  <?php get_template_part('blocks/block__cover') ?>


    <?php // Voir les événements ?>

    <?php $loop = new WP_Query(
      array(
        'post_type'       => 'evenement',
        'orderby'         => 'title',
        'order'           => 'ASC',
        'posts_per_page'  => -1
      )
    );
    if ($loop->have_posts()) :?>

    <section class="eve">
      <ul>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li class="eve__eve row" onclick="location.href='<?php the_permalink(); ?>'">
          <div class="col l2">
            <p class="body"><?php the_field('eve__start');?>
            <br><a href="<?php the_field('eve__lieu-url') ?>" target="_blank"><?php the_field('eve__lieu');?></a><?php if( get_field('eve__lieu') ): ?>, <?php the_field('eve__lieu-ville') ?><?php endif; ?></p>
          </div>
          <div class="col l6"><h2 class="display1"><?php the_title(); ?></h2></div>
          <div class="col l4">
            <p class="caption color__legende"><?php the_field('eve__desc-courte'); ?></p>
          </div>
          <div class="eve__overlay col l4">
            <?php $terms = get_field('eve__modalite');
            if( $terms ): ?>
            <span class="liste__de__lien">
                <?php foreach( $terms as $term ): ?>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
              <?php endforeach; ?>
            </span>
          <?php endif; ?>
          <span>En savoir plus →</span>
          </div>

        </li>
      <?php endwhile; ?>
      </ul>
    </section>
  <?php endif; wp_reset_query(); ?>

</main>

<?php get_footer(); ?>
