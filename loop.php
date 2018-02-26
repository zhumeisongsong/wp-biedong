<section class="container main-loop">
  <div class="row">
      <?php if (have_posts()):
          while (have_posts()) :the_post(); ?>
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
          <?php endwhile; ?>
      <?php else: ?>
          <?php _e('Sorry, nothing to display.'); ?>
      <?php endif; ?>
  </div>
</section>
