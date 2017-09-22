<?php get_header() ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=539046136279441";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="single" id="post-<?php the_ID(); ?>" role="article">
                <header style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)" >
                  <h1><?php the_title() ?></h1>
                </header>


                <div class="post-content">
									<p><em>Last updated on <time datetime="<?php the_modified_date(c);?>"><?php the_modified_date();?></time> </em></p>
                  <?php the_content(); ?>
                </div>
								<div class="fb-page" data-href="https://www.facebook.com/juniordevelopercentral/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/juniordevelopercentral/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/juniordevelopercentral/">Junior Developer Central with James Bubb</a></blockquote></div>
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
							<script>
							jQuery(function() {
							  jQuery.scrollDepth();
							});
							</script>
              <?php get_footer(); ?>
