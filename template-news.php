<?php /* Template Name: news */
get_header(); ?>

<main role="main">
  <section class="news-list container">
      <?php
      $args = array(
          'category_name' => 'news');
      $posts = get_posts($args);
      if ($posts) :foreach ($posts as $post) : setup_postdata($post);
          ?>
        <article class="row">
          <div class="col-sm-12 col-md-5 text-con no-padding-r">
            <h2>> <?php the_excerpt(); ?></h2>
            <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
          </div>
          <div class="col-sm-12 col-md-7 no-padding">
              <?php the_post_thumbnail(); ?>
          </div>
        </article>
      <?php endforeach; ?>
      <?php else: ?>
          <?php _e('Sorry, nothing to display.'); ?>
      <?php endif; ?>

  </section>
</main>
<?php get_footer(); ?>
