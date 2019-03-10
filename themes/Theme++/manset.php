<div class="container manset">
  <div id="next" alt="Next" title="Next">
    <div class="arrow-right"></div>
  </div>
  <div id="prev" alt="Prev" title="Prev">
    <div class="arrow-left"></div>
  </div>
  <div id="slider33">
    <?php while (have_posts()) : the_post(); ?>
    <div class="slide">
      <div class="slide-copy">
        <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
      </div>
      <div class="img1">
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                  if ( has_post_thumbnail() )
                  {
        ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
          <img class="icerikresim" src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
        <?php } ?></div>
    </div>
    <?php endwhile;?>
  </div>
</div>
