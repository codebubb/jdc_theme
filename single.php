<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="single" id="post-<?php the_ID(); ?>" role="article">
                <header style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)" >
                  <h1><?php the_title() ?></h1>
                </header>


                <div class="post-content">
									<p><em>Last updated on <time datetime="<?php the_modified_date(c);?>"><?php the_modified_date();?></time> </em></p>
                  <?php the_content(); ?>
                </div>
							<?php	if ( comments_open() || get_comments_number() ) {
									comments_template();
								} ?>
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

							<?php endif; ?>

              <?php get_footer(); ?>
