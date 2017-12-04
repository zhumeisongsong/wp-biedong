<?php get_header(); ?>

<main role="main">
  <!--swiper-->
  <section class="container-fluid fluid-con no-padding">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'category_name' => 'swiper-banner',
              'showposts' => '5',
          );
          $posts = get_posts($args);
          ?>
          <?php if ($posts) : ?>
              <?php foreach ($posts as $post) :
                  setup_postdata($post); ?>
              <div class="swiper-slide">
                  <?php the_post_thumbnail(); ?>
              </div>
              <?php endforeach; ?>
          <?php endif; ?>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

    <?php get_template_part('loop'); ?>

</main>
<?php get_footer(); ?>
