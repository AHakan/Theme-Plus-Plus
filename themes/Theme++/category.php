<?php get_header(); ?>


<!-- İCERİK BÖLÜMÜ -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
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
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 onicerikbilgi2">
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 onicerikbilgi2">
          <h2><?php the_author(); ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 onicerikbilgi2">
          <span class="glyphicon glyphicon-calendar"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 onicerikbilgi2">
          <h2><?php the_time(' j F Y ') ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 onicerikbilgi2">
        <div class="devaminioku"><a href="<?php the_permalink() ?>">Devamını oku >><a></div>
      </div>
    </div>
  </div>

  <?php endwhile;?>
  <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 sayfanumara"><?php echo paginate_links(); ?></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
