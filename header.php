<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">

  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(''); ?></title>

  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55161298-1', 'auto');
    ga('send', 'pageview');

    </script>
    +<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '862128973952487');
 fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=862128973952487&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  </head>

  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


      <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
      <div class="container">


          <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
            <div id="logo" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>"/></a></div>

            <?php // if you'd like to use the site description you can un-comment it below ?>
            <?php // bloginfo('description'); ?>

            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <input type="checkbox" id="hamburger-btn">
              <label class="icon" for="hamburger-btn">
              <span></span>
              <span></span>
              <span></span>
              </label>
              <?php wp_page_menu(); ?>
            </nav>
          </div>
        </header>
