<?php get_header() ?>
<div class="content">
<div class="container">
<h1>How To Guides</h1>
<?php
  $howToCat = get_cat_ID('HowTo');
  foreach(get_categories(array('child_of' => $howToCat, 'hide_empty' => 0)) as $howTo){
    ?><article class="category" role="article">
    <a href="<?php echo get_category_link($howTo->term_id); ?>">
      <div class="featured-img">
        <?php if (function_exists('z_taxonomy_image')) z_taxonomy_image($howTo->term_id); ?>
      </div>
      <h2 class="category-title"><?php echo $howTo->name?></h2>
    </a>
    </article>
  <?php }
?>
</div>
</div>
<?php get_footer() ?>
