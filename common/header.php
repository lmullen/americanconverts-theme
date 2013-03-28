<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo img('favicon.png'); ?>" />
    <link rel="shortcut icon" href="<?php echo img('favicon.png'); ?>" />

    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_url('http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    echo head_css();

    echo theme_header_background();
    ?>
    <style>
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: #<?php echo ($titleColor = get_theme_option('header_title_color')) ? $titleColor : "000000"; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
    </style>
    <!-- JavaScripts -->
    <?php 
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('globals');
    echo head_js(); 
    ?>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-39387815-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
        </header>
            
        <div class="menu-button">Menu</div>
            
        <div id="wrap">
            <nav id="primary-nav">
                <?php echo public_nav_main(array('role' => 'navigation')); ?>
                <div id="search-wrap">
                    <h2>Search</h2>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                </div>
                <div id="sidebar-description">
                  <?php if ( $description = option('description')): ?>
                  <p id="tagline"><?php echo $description; ?></p>
                  <?php endif; ?>

                  <h5 id="credit-header">Principal Investigators:</h5>
                  <ul id="credit">
                    <li> <a href="http://history.uconn.edu/graduate/bartram.php">Erin Bartram</a>, <br/> University of Connecticut</li>
                    <li> <a href="http://lincolnmullen.com">Lincoln A. Mullen</a>, <br/> Brandeis University </li>
                  </ul>
                  <div id="twitter"><a href="https://twitter.com/convertsDB" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @convertsDB</a></div>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </nav>
            <div id="content">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
