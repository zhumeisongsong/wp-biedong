<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <article class="container main-loop">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item-con">
                <?php the_post_thumbnail(); ?>
              <div class="hover-con">
                  <?php the_title(); ?><br>
                ><br>
                sdfdsfds<br>
                fsdfdsfds
              </div>
            </a>
          <?php endif; ?>
      </div>
    </div>
  </article>

<?php endwhile; ?>

<?php else: ?>
    <?php _e('Sorry, nothing to display.'); ?>
<?php endif; ?>
