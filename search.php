<?php get_header(); ?>

  <main role="main">

      <?php
      $args = array(
          'category_name' => 'brand');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>

  </main>
<?php get_footer(); ?>