<?php get_header(); ?>

<main role="main" class="main-pc">
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
              <a class="swiper-slide" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
              </a>
              <?php endforeach; ?>
          <?php endif; ?>

      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

    <?php
    $args = array(
        'category_name' => 'brand',
        'posts_per_page' => -1);
    $posts = get_posts($args);
    get_template_part('loop');
    ?>

</main>

<main role="main" class="main-sp">
  <!--commercial-->
  <section class="commercial-con">
      <?php
      $args = array(
          'category_name' => 'commercial');
      $posts = get_posts($args);
      ?>
      <?php if ($posts) : ?>
          <?php foreach ($posts as $post) :
              setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
          </a>
          <?php endforeach; ?>
      <?php endif; ?>
  </section>
  <br/>

  <!--brand-->
  <section class="category-section">
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner-4'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) :
                foreach ($posts as $post) :
                    setup_postdata($post); ?>
                  <a class="swiper-slide" href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                  </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-brand.jpg" alt="品牌">
    </header>
      <?php
      $args = array(
          'category_name' => 'brand',
          'numberposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
  </section>

  <!--pack-->
  <section class="category-section">
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'category_name' => 'swiper-banner-2'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                <a class="swiper-slide" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-pack.jpg" alt="包装">
    </header>
      <?php
      $args = array(
          'category_name' => 'pack',
          'numberposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
  </section>

  <!--inset-->
  <section class="category-section">
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner-3'
            );
            $posts = get_posts($args);
            ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                <a class="swiper-slide" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-inset.jpg" alt="插画">
    </header>
      <?php
      $args = array(
          'category_name' => 'inset',
          'numberposts' => '6');
      $posts = get_posts($args);
      get_template_part('loop');
      ?>
  </section>
</main>
<?php get_footer(); ?>
