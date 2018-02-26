<?php get_header(); ?>

<!--pc-->
<main role="main" class="main-pc">
  <!--swiper-->
  <section class="container swiper-con">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'category_name' => 'swiper-banner',
              'posts_per_page' => 10
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
<!--sp-->
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

  <!--brand-->
  <section class="category-section">
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-brand.jpg" alt="品牌">
    </header>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $args = array(
                'category_name' => 'swiper-banner-4',
                'posts_per_page' => 10
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
    <section class="container main-loop">
      <div class="row">
          <?php
          $args = array(
              'category_name' => 'brand-wap',
              'posts_per_page' => 6
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post(); ?>
            <div class="col-xs-6 col-md-4 item-con">
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    <div class="hover-con cover-text">
                        <?php $english = get_post_meta($post->ID, 'english', true);
                        echo $english; ?><br>
                        <?php $tag = get_post_meta($post->ID, 'tag', true);
                        echo $tag; ?><br>
                      ><br>
                        <?php the_title(); ?><br>
                        <?php $year = get_post_meta($post->ID, 'year', true);
                        echo $year; ?>
                    </div>
                  </a>
                <?php endif; ?>
            </div>
              <?php
          endwhile;
          wp_reset_query();
          ?>
      </div>
    </section>
  </section>

  <!--pack-->
  <section class="category-section">
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-pack.jpg" alt="包装">
    </header>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'category_name' => 'swiper-banner-2',
                'posts_per_page' => 10
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
    <section class="container main-loop">
      <div class="row">
          <?php
          $args = array(
              'category_name' => 'pack-wap',
              'posts_per_page' => 6
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post(); ?>
            <div class="col-xs-6 col-md-4 item-con">
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    <div class="hover-con cover-text">
                        <?php $english = get_post_meta($post->ID, 'english', true);
                        echo $english; ?><br>
                        <?php $tag = get_post_meta($post->ID, 'tag', true);
                        echo $tag; ?><br>
                      ><br>
                        <?php the_title(); ?><br>
                        <?php $year = get_post_meta($post->ID, 'year', true);
                        echo $year; ?>
                    </div>
                  </a>
                <?php endif; ?>
            </div>
              <?php
          endwhile;
          wp_reset_query();
          ?>
      </div>
    </section>
  </section>

  <!--inset-->
  <section class="category-section">
    <header>
      <img src="<?php echo get_template_directory_uri(); ?>/image/title-inset.jpg" alt="插画">
    </header>
    <section class="container no-padding swiper-con">
      <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'category_name' => 'swiper-banner-3',
                'posts_per_page' => 10
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

    <section class="container main-loop">
      <div class="row">
          <?php
          $args = array(
              'category_name' => 'inset-wap',
              'posts_per_page' => 6
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post(); ?>
            <div class="col-xs-6 col-md-4 item-con">
                <?php if (has_post_thumbnail()) : ?>
                  <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    <div class="hover-con cover-text">
                        <?php $english = get_post_meta($post->ID, 'english', true);
                        echo $english; ?><br>
                        <?php $tag = get_post_meta($post->ID, 'tag', true);
                        echo $tag; ?><br>
                      ><br>
                        <?php the_title(); ?><br>
                        <?php $year = get_post_meta($post->ID, 'year', true);
                        echo $year; ?>
                    </div>
                  </a>
                <?php endif; ?>
            </div>
              <?php
          endwhile;
          wp_reset_query();
          ?>
      </div>
    </section>

  </section>
</main>
<?php get_footer(); ?>
