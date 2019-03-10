<?php get_header(); ?>
<!-- İCERİK BÖLÜMÜ -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <?php while (have_posts()) : the_post(); ?>
  <!--İCERİK RESİM-->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerikresim">

        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                  if ( has_post_thumbnail() )
                  {
        ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
          <img class="icerikresim" src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
        <?php } ?>
  </div>
  <!--İCERİK-->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sayfaicerik">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 icerikbaslik">
      <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerikyazi">
      <p><?php the_content(); ?> </p>
    </div>






  </div>
  <?php endwhile;?>

</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
