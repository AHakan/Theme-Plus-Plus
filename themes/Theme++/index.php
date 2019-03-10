<?php get_header(); ?>




<!-- İCERİK BÖLÜMÜ -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mansetmobil">
      <?php include (TEMPLATEPATH . "/manset.php"); ?>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 buyukbaslik">
    <h2><?php echo of_get_option("ust_baslik_buyuk"); ?></h2>
  </div>
  <?php while (have_posts()) : the_post(); ?>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 onicerik">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 onicerikresim">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
              	  if ( has_post_thumbnail() )
              	  {
        ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
          <img class="icerikresim" src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
        <?php } ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 onicerikbaslik">
      <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 onicerikyazi">
      <p><?php the_excerpt(); ?> </p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 onicerikbilgi">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 onicerikbilgi2">
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-11 col-xs-11 onicerikbilgi2">
          <h2><?php the_author(); ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 onicerikbilgi2">
          <span class="glyphicon glyphicon-calendar"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-11 col-xs-11 onicerikbilgi2">
          <h2><?php the_time(' j F Y ') ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 onicerikbilgi2">
        <div class="devaminioku"><a href="<?php the_permalink() ?>">Devamını oku >></a></div>
      </div>
    </div>
  </div>

  <?php endwhile;?>
  <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 sayfanumara"><?php echo paginate_links(); ?></div>



  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-6 kucukbolum">
      <div class="col-lg-12 col-md-12 col-sm-12 kucukbaslik">
        <h2><?php echo of_get_option("alt_kucuk_baslik_1"); ?></h2>
      </div>
      <?php $kategori=of_get_option("alt_kucuk_kategori_1"); ?>
      <?php query_posts('showposts=5&orderby=date&cat='.$kategori.''); ?>
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <?php if(has_post_thumbnail()): ?>
      <div class="col-lg-12 col-md-12 col-sm-12 kucukyazi">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width='100%' height='auto' /></a>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 kucukyazi2">
          <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
        </div>
      </div>
      <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 kucukbolum2">

      <div class="col-lg-12 col-md-12 col-sm-12 kucukbaslik">
        <h2><?php echo of_get_option("alt_kucuk_baslik_2"); ?></h2>
      </div>
      <?php $kategori2=of_get_option("alt_kucuk_kategori_2"); ?>
      <?php query_posts('showposts=5&orderby=date&cat='.$kategori2.''); ?>
      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <?php if(has_post_thumbnail()): ?>
      <div class="col-lg-12 col-md-12 col-sm-12 kucukyazi">
        <div class="col-lg-5 col-md-5 col-sm-12">
          <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'widget-image'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width='100%' height='auto' /></a>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 kucukyazi2">
          <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
        </div>
      </div>
      <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
