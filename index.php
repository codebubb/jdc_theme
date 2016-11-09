<?php get_header() ?>
<div class="content">
<div class="container">
<?php $image_side_left = true; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <a href="<?php the_permalink() ?>">
  <article class="list" id="post-<?php the_ID(); ?>" role="article">
    <div class="featured-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <h2 class="article-title"><?php the_title(); ?></h2>
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
</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
