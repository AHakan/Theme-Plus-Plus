<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Lütfen bu sayfaya doğrudan yükleme yapmayınız, teşekkürler.'); if (post_password_required()) { ?>Bu yazı parola korumalıdır, yorumları görebilmek için parolayı girin.
<?php return; } ?>
<!-- Düzenlemeye buradan başlayabilirsiniz. -->
<?php if ( have_comments() ) : ?>
<h4 class="kacyorum">Yorumlar (<?php comments_number('0 Yorum :/', '1 Yorum', '% Yorum' );?>)</h4>
<!-- Yorumları Listele -->
<ul class="yorumlistele">
<?php wp_list_comments('type=all&callback=sinyor_comment'); ?>
</ul>
<!-- #Yorumları Listele -->
<?php else : ?>
<?php if ( comments_open() ) : ?>
<?php else : ?>
Bu yazı yorumlara kapatılmıştır.

<?php endif; ?>
<?php endif; ?>
<?php ?>
<?php global $trackbacks; ?>
<?php if ($trackbacks) : ?>
<?php $comments = $trackbacks; ?>
<div id="pingback-trackback">
<h3 id="trackbacks">Geri bildirimler: <?php echo sizeof($trackbacks); ?></h3>
<ol class="pings">
<?php foreach ($comments as $comment) : ?>
<!-- Geriizleme başlangıç -->
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<cite><?php comment_author_link() ?></cite>
<?php if ($comment->comment_approved == '0') : ?>
<em>Yorumunuz denetim için bekliyor.</em>
<?php endif; ?>
</li>
<!-- Geriizleme bitiş -->
<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
<?php endforeach; ?>
</ol>
</div>
<?php endif; ?>
<?php ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
<h4>
<?php comment_form_title( 'Yazı hakkında görüşlerinizi belirtmek istermisiniz?', 'Şuanda %s adlı kişinin yorumuna cevap yazıyorsunuz.' ); ?>
<span class="cancel-comment-reply">
<small><?php cancel_comment_reply_link(); ?></small>
</span>
</h4>
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
Yorum yapabilmek için <a href="<?php echo wp_login_url( get_permalink() ); ?>">giriş</a> yapmalısınız.
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( is_user_logged_in() ) : ?>Sisteme <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yapılmış. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Çıkış yapın">Çıkış yap &raquo;</a>
<?php else : ?>
<!-- Ziyaretçi Bilgisi -->
<script type="text/javascript">
//<![CDATA[
(function() {
document.write('<input type="text" name="author" id="author" value="" placeholder="İsim &amp; Soyisim" size="22" tabindex="1"/>');
document.write('<input type="text" name="email" id="email" value="" placeholder="E-Posta" size="22" tabindex="2" />');
document.write('<input type="text" name="url" id="url" value="" placeholder="Website" size="22" tabindex="3" />');
})();
//]]>
</script>
<!-- #Ziyaretçi Bilgisi -->
<?php endif; ?>
<script type="text/javascript">
//<![CDATA[
(function() {
document.write('<textarea name="comment" class="comment" placeholder="Yorumunuzu buraya yazabilirsiniz." tabindex="4"></textarea>');
})();
//]]>
</script>
<input name="submit" type="submit" id="submit" tabindex="5" value="Gönder" /><?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>
</div>
<?php endif; ?>
