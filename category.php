<?php get_header(); ?>

<main role="main">
  <section>
    <h1><?php single_cat_title(); ?></h1>

      <?php get_template_part('loop'); ?>
  </section>
</main>

<?php get_footer(); ?>
