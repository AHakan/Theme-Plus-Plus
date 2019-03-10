<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo of_get_option("site_basligi"); ?></title>
    <link href="<?php bloginfo("template_url"); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap-theme.min.css" />
    <link href="<?php bloginfo("template_url"); ?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/dist/css/unslider.css">
    <meta name="description" content="<?php echo of_get_option("site_aciklamasi"); ?>" />
    <link rel="icon" href="<?php echo of_get_option("site_favicon"); ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo of_get_option("site_favicon"); ?>" type="image/x-icon" />
    <meta name="theme-color" content="#F33333">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#F33333">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#F33333">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ustmenu1">
          <!--MOBİL SAYFA-->
          <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
            <div class="btn-group">
              <button type="button" class="dropdown-toggle mobilmenu1" data-toggle="dropdown">
                <span class="glyphicon glyphicon-align-justify mobilmenu2"></span>
              </button>
              <ul class="dropdown-menu mobildropdown" role="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
              </ul>
            </div>
          </div>

          <!--MOBİL SEARCH-->
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mobilsearch">
            <div class="dropdown mobilarama">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-search aramabutton"></span>
              </a>
              <div class="dropdown-menu aramakutu">
                  <?php get_search_form();?>
              </div>
            </div>
          </div>

          <!-- MOBİL LOGO -->
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mobillogo">
            <a href="<?php bloginfo('siteurl');?>"><img src="<?php echo of_get_option("site_logo"); ?>" alt="<?php echo of_get_option("site_basligi"); ?>"></a>
          </div>

          <!-- MOBİL MENÜ -->
          <div class="col-sm-1 col-sm-offset-5 col-xs-1 col-xs-offset-4 homebuttonkutu">
            <a href="<?php bloginfo('siteurl');?>"><span class="glyphicon glyphicon-home homebutton2"></span></a>
          </div>

          <!-- MASAÜSTÜ LOGO -->
          <div class="col-lg-2 col-md-2 col-sm-2 ustmenulogo">
            <a href="<?php bloginfo('siteurl');?>"><img src="<?php echo of_get_option("site_logo"); ?>" alt="<?php echo of_get_option("site_basligi"); ?>"></a>
          </div>

          <!-- MASAÜSTÜ MENÜ-->
          <div class="col-lg-8 col-md-8 col-sm-8 ustmenu1icerik">
            <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
            </ul>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1 anasayfabuton">
            <a href="<?php bloginfo('siteurl');?>"><span class="glyphicon glyphicon-home homebutton"></span></a>
          </div>
        </div>

        <!-- MASAÜSTÜ KATEGORİ MENÜ-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 kategorimenu">
          <div class="col-lg-9 col-md-9  col-sm-9 col-xs-9  kategorimenu2">
            <ul>
              <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
            </ul>
          </div>

          <!--MOBİL KATEGORİ MENÜ -->
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  mobilkategori">
              <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <span class="glyphicon glyphicon-option-vertical"></span>
                </a>
                <ul class="dropdown-menu">
                  <?php wp_list_cats(); ?>
                </ul>
              </div>
          </div>
        </div>

        <!-- KAYAN YAZI BÖLÜMÜ-->
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 guncelhaberler">
          <p> <?php echo of_get_option("kayan_yazi_basligi"); ?></p>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 kayanyazi">
          <div id="slider">
           <marquee scrollAmount="7" onmouseover="this.stop();" onmouseout="this.start();">
           <?php $the_query = new WP_Query('orderby=post_date'); while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
           <?php endwhile;?>
           </marquee>
          </div>
        </div>
