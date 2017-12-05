<?php get_header(); ?>

<main role="main">
  <!--swiper-->
  <section class="container swiper-con">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'category_name' => 'swiper-banner'
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
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div>
    </div>
  </section>

    <?php
    $args = array(
        'category_name' => 'brand');
    $posts = get_posts($args);
    get_template_part('loop');
    ?>

</main>
<?php get_footer(); ?>
