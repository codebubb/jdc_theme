<?php get_header() ?>
<div class="content">
<div class="container">
<?php
$category = get_category(get_query_var('cat'));
$args = array('category_name' => $category->name);
$query = new WP_Query($args);

if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
  <article class="list" id="post-<?php the_ID(); ?>" role="article">
  <a href="<?php the_permalink() ?>">
    <div class="featured-img">
      <?php the_post_thumbnail('home-page-thumb'); ?>
    </div>
    <h2 class="article-title"><?php the_title(); ?></h2>  </a>
    <p class="post-details"><?php echo the_modified_date(); ?></p>
  </article>
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
<?php endif; ?>

</div>
<?php get_footer() ?>
