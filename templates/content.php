<article <?php post_class(); ?>>
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary container">
    <div class="row">
      <?php if (has_post_thumbnail()): ?>
        <div class="col-sm-4 col-xs-12">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-sm-8 col-xs-12">
          <?php the_excerpt(); ?>
        </div>
      <?php else: ?>
        <div class="col-xs-12">
          <?php the_excerpt(); ?>
        </div>
      <?php endif ?>
    </div>
  </div>
</article>
