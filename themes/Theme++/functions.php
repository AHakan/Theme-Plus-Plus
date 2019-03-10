<?php
add_theme_support( ‘post-thumbnails’ );
?>
<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 125, 125 );
?>


<?php
register_sidebar( array(
    'name' => __( 'Sağ Sidebar', 'Theme++' ),
    'id' => 'sidebar-sag',
    'description' => __( 'Sağ tarafta gözükmesini istediğiniz bileşenleri koymanız gereken yer', 'Theme++' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
?>
<?php
register_sidebar( array(
    'name' => __( 'Footer Sidebar 1', 'Theme++' ),
    'id' => 'sidebar-alt-1',
    'description' => __( 'Alt tarafta gözükmesini istediğiniz bileşenleri koymanız gereken yer', 'Theme++' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
?>
<?php
register_sidebar( array(
    'name' => __( 'Footer Sidebar 2', 'Theme++' ),
    'id' => 'sidebar-alt-2',
    'description' => __( 'Alt tarafta gözükmesini istediğiniz bileşenleri koymanız gereken yer', 'Theme++' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
?>
<?php
register_sidebar( array(
    'name' => __( 'Footer Sidebar 3', 'Theme++' ),
    'id' => 'sidebar-alt-3',
    'description' => __( 'Alt tarafta gözükmesini istediğiniz bileşenleri koymanız gereken yer', 'Theme++' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
?>
<?php
register_sidebar( array(
    'name' => __( 'Footer Sidebar 4', 'Theme++' ),
    'id' => 'sidebar-alt-4',
    'description' => __( 'Alt tarafta gözükmesini istediğiniz bileşenleri koymanız gereken yer', 'Theme++' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
?>


<?php
function wpdocs_my_search_form( $form ) {
    $form = '<div class="aramakutusu"><form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( '' ) . '</label>
    <input type="text" class="aramayazi" value="' . get_search_query() .'" name="s" id="s" />
    <input type="submit" class="searchsubmit" value="'. esc_attr__( 'Ara' ) .'" />
    </div>
    </form></div>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
?>

<?php
// Yorum Listeleme Özelliği
function sinyor_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
<?php $PostAuthor = false; if($comment->comment_author_email == get_the_author_email()) {
$PostAuthor = true;}
elseif($comment->comment_author_email == 'mailadresiniz@mail.com') {
$PostAuthor = true;}
?>
<li <?php if($PostAuthor) {echo "class='authorcomment' ";} ?> id="li-yorum-<?php comment_ID() ?>">
<div class="yorum">
<div class="yorumkullanici">
<!-- Yorum Avatar -->
<div class="yorumavatar">
<?php echo get_avatar($comment,$size='54'); ?>
</div>
<!-- #Yorum Avatar -->
<!-- Kullanıcı Adı ve Tarih -->
<h3><?php printf(__('%s'), get_comment_author_link()) ?></h3>
<div class="yorumtarih">
<i class="yorumtarihikon"></i><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(get_comment_date()); ?></a> <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(get_comment_time()); ?></a>
</div>
<!-- #Kullanıcı Adı ve Tarih -->
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em class="yorumonay">Yorumunuz onaylandıktan sonra görüntülenecektir.</em>
<?php endif; ?>
<div class="yorumyazi"><?php comment_text() ?></div>
<div class="cevapla">
<i class="cevaplaikon"></i><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>
<?php }
?>




<?php
if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {

	$optionsframework_settings = get_option('optionsframework');

	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];

	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}

	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}
?>


<?php

add_action( 'init', 'theme_menus' );

function theme_menus() {
register_nav_menus(
array(
'menu-1' => __( 'Üst Menü' ),
'menu-2' => __( 'Alt Menü' )
)
);
}

?>


<?php
/*
 * Plugin Name: Theme++ Sosyal Alan
 * Plugin URI: http://ahmethcelik.com
 * Description: Bu bileşen ile sosyal profillerinizi yayınlayabilirsiniz.
 * Version: 1.0
 * Author: Ahmet Hakan ÇELİK
 * Author URI: http://ahmethcelik.com
 */

add_action( 'widgets_init', 'bi3_sosyal_widgets' );

function bi3_sosyal_widgets() {
 register_widget( 'bi3_sosyal_widget' );
}

class bi3_sosyal_widget extends WP_Widget {

function bi3_sosyal_widget() {

 /* Widget settings */
 $widget_ops = array( 'classname' => 'widget_sosyal', 'description' => __('Bu Bileşen ile sosyal pforillerinizi yayınlayabilirsiniz. Ayarları Tema Ayarlari bölümünden yapınız.', 'bi3') );

/* Create the widget */
 $this->WP_Widget( 'bi3_sosyal_widget', __('Theme++ Sosyal Alan', 'bi3'), $widget_ops );
 }

function widget( $args, $instance ) {

 ?>
  <div class="sosyalikonlar">
     <a href="<?php echo of_get_option("facebook"); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/facebook.png" alt="facebook"/></a>
     <a href="<?php echo of_get_option("twitter"); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/twitter.png" alt="twitter"/></a>
     <a href="<?php echo of_get_option("instagram"); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/instagram.png" alt="instagram"/></a>
     <a href="<?php echo of_get_option("youtube"); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/youtube.png" alt="youtube"/></a>
     <a href="<?php echo of_get_option("google"); ?>" target="_blank"><img src="<?php bloginfo("template_url"); ?>/img/google.png" alt="google"/></a>
   </div>
 <?php
 echo $after_widget;
 }

function update( $new_instance, $old_instance ) {}

function form( $instance ) {

 $instance = wp_parse_args( (array) $instance, $defaults ); ?>


 <?php
 }
}

?>
