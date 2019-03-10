<?php get_header(); ?>
<!-- İCERİK BÖLÜMÜ -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <?php while (have_posts()) : the_post(); ?>
  <!--İCERİK RESİM-->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerikresim">
    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2 goruntulenme">
      <span class="glyphicon glyphicon-eye-open"></span>
      <?php if(function_exists('the_views')) { the_views(); } ?>
      <br>
      <a target="blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="Facebook"><img src="<?php bloginfo("template_url"); ?>/img/face.png"/></a>
      <br>
      <a target="blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink();?>" class="Twitter"><img src="<?php bloginfo("template_url"); ?>/img/twi.png"/></a>
      <br>
      <a href=”whatsapp://send?text=<?php the_permalink();?>&t=<?php the_title(); ?>” data-action=”share/whatsapp/share” target=”blank” class="Whatsapp"><img src="<?php bloginfo("template_url"); ?>/img/whatsapp.png" alt=”Whatsapp’ta Paylaş”/></a>
    </div>
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
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerik">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 icerikbaslik">
      <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerikyazi">
      <p><?php the_content(); ?> </p>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 icerikbilgi">
      <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 onicerikbilgi2">
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 onicerikbilgi2">
          <h2><?php the_author(); ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 onicerikbilgi2">
          <span class="glyphicon glyphicon-calendar"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 onicerikbilgi2">
          <h2><?php the_time(' j F Y ') ?></h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 onicerikbilgi2">
          <span class="glyphicon glyphicon-list-alt"></span>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10 onicerikbilgi2">
          <h2><?php the_category(', '); ?></h2>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 sonraki">
        <p>Sonraki Yazı</p>
        <p><?php next_post_link( '%link', '%title' ); ?></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 onceki">
        <p>Önceki Yazı</p>
        <p><?php previous_post_link( '%link', '%title' ); ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 yorumalani">
    <?php comments_template();?>
  </div>
  <?php endwhile;?>

</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
