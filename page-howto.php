<?php get_header() ?>
<div class="content">
<div class="container">
<h1>HowTos</h1>
<?php
  $howToCat = get_cat_ID('HowTo');
  foreach(get_categories(array('child_of' => $howToCat)) as $howTo){
    echo $howTo->name;
  }
?>
</div>
</div>
<?php get_footer() ?>
