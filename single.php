<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <section class="detail-con container">
    <article class="row">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <div class="col-xs-12 col-md-5">
            <h1 class="cover-text">
                <?php $english = get_post_meta($post->ID, 'english', true);
                echo $english; ?><br>
                <?php $tag = get_post_meta($post->ID, 'tag', true);
                echo $tag; ?><br>
              ><br>
                <?php the_title(); ?><br>
                <?php $year = get_post_meta($post->ID, 'year', true);
                echo $year; ?>
            </h1>

          </div>

          <div class="col-xs-12 col-md-7">
            <div class="main-text">
                <?php the_excerpt(); ?>
            </div>
          </div>

          <div class="col-xs-12">
              <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
        <?php else: ?>
            <?php _e('Sorry, nothing to display.'); ?>
        <?php endif; ?>
    </article>
  </section>
  <!-- /section -->
</main>
<?php get_footer(); ?>


