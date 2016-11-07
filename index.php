<?php get_header() ?>
<?php $image_side_left = true; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <a href="<?php the_permalink() ?>">
  <article class="list" id="post-<?php the_ID(); ?>" role="article">
    <div class="col-left">
      <?php if( $image_side_left){ ?>
      <?php the_post_thumbnail(); ?>
      <?php } else{ ?>
        <h2 class="article-title"><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
      <?php } ?>
    </div><div class="col-right">
      <?php if( !$image_side_left){ ?>
      <?php the_post_thumbnail(); ?>
      <?php } else{ ?>
        <h2 class="article-title"><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
      <?php } ?>
    </div>
  </article>
  </a>
  <?php $image_side_left = !$image_side_left; ?>
<?php endwhile; ?>

<?php else : ?>

  <article id="post-not-found" class="hentry cf">
    <header class="article-header">
      <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
    </header>
    <section class="entry-content">
      <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
    </section>
    <footer class="article-footer">
      <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
    </footer>
  </article>

<?php endif; ?>

<?php get_footer(); ?>
