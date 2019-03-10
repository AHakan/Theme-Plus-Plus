<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	/////GENEL

	$options[] = array(
		'name' => __('Genel', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Site Başlığı', 'options_check'),
		'desc' => __('Site Başlığını Bu Alana Yazabilirsiniz.', 'options_check'),
		'id' => 'site_basligi',
		'std' => 'Theme++',
		'type' => 'text');

	$options[] = array(
		'name' => __('Site Açıklaması', 'options_check'),
		'desc' => __('Site Açıklamasını Bu Alana Yazabilirsiniz.', 'options_check'),
		'id' => 'site_aciklamasi',
		'std' => 'Max 140 Karekter',
		'type' => 'textarea');


		/////LOGO

		$options[] = array(
			'name' => __('Logo', 'options_check'),
			'type' => 'heading');

		$options[] = array(
			'name' => __('Logo Resmi', 'options_check'),
			'desc' => __('Önerilen: width:200px height:60px ', 'options_check'),
			'id' => 'site_logo',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Favicon Resmi', 'options_check'),
			'desc' => __('Önerilen: width:32px height:32px ', 'options_check'),
			'id' => 'site_favicon',
			'type' => 'upload');

		////SOSYAL
		$options[] = array(
			'name' => __('Sosyal', 'options_check'),
			'type' => 'heading');

		$options[] = array(
			'name' => __('Facebook Adresi', 'options_check'),
			'desc' => __('Tam Adresi Yazınız. Örn: http://www.facebook.com/Sayfa_adi', 'options_check'),
			'id' => 'facebook',
			'std' => 'http://www.facebook.com/Sayfa_adi',
			'type' => 'text');

		$options[] = array(
			'name' => __('Twitter Adresi', 'options_check'),
			'desc' => __('Tam Adresi Yazınız. Örn: http://www.twitter.com/Sayfa_adi', 'options_check'),
			'id' => 'twitter',
			'std' => 'http://www.twitter.com/Sayfa_adi',
			'type' => 'text');

		$options[] = array(
			'name' => __('İnstagram Adresi', 'options_check'),
			'desc' => __('Tam Adresi Yazınız. Örn: http://www.instagram.com/Sayfa_adi', 'options_check'),
			'id' => 'instagram',
			'std' => 'http://www.instagram.com/Sayfa_adi',
			'type' => 'text');

		$options[] = array(
			'name' => __('Youtube Adresi', 'options_check'),
			'desc' => __('Tam Adresi Yazınız. Örn: http://www.youtube.com/Sayfa_adi', 'options_check'),
			'id' => 'youtube',
			'std' => 'http://www.youtube.com/Sayfa_adi',
			'type' => 'text');

		$options[] = array(
			'name' => __('Google+ Adresi', 'options_check'),
			'desc' => __('Tam Adresi Yazınız. Örn: http://plus.google.com/Sayfa_adi', 'options_check'),
			'id' => 'google',
			'std' => 'http://plus.google.com/Sayfa_adi',
			'type' => 'text');


		/////MANŞET

		$options[] = array(
			'name' => __('Başlıklar', 'options_check'),
			'type' => 'heading');

		$options[] = array(
			'name' => __('Kayan Yazı', 'options_check'),
			'desc' => __('Kırmızı Bölgede Gözükmesini İstediğiniz Yazıyı Yazabilirsiniz.', 'options_check'),
			'id' => 'kayan_yazi_basligi',
			'std' => 'Son Dakika',
			'type' => 'text');

		$options[] = array(
			'name' => __('Büyük Ön İçerik Başlık', 'options_check'),
			'desc' => __('Anasayfa da Yayınlanan İlk Yazıların Üst Konu Başlığı', 'options_check'),
			'id' => 'ust_baslik_buyuk',
			'std' => 'GENEL YAZILAR',
			'type' => 'text');

		$options[] = array(
			'name' => __('Küçük Ön İçerik Başlık 1', 'options_check'),
			'desc' => __('Alt Tarafta Kategori Yazılarının Yayınlandığı Başlık. Bu Bölüm 1 ID li Kategoriyi Yayınlar. Kategoriyi Ona Göre Ayarlayınız.', 'options_check'),
			'id' => 'alt_kucuk_baslik_1',
			'std' => 'Kategori İsmi',
			'type' => 'text');

		$options[] = array(
		  'name' => __('Küçük Ön İçerik 1', 'options_check'),
		  'desc' => __('Alt Taraf 1 de Yayınlanacak Olan Kategoriyi Seçiniz.', 'options_check'),
		  'id' => 'alt_kucuk_kategori_1',
		  'type' => 'select',
		  'options' => $options_categories);

		$options[] = array(
			'name' => __('Küçük Ön İçerik Başlık 2', 'options_check'),
			'desc' => __('Alt Tarafta Kategori Yazılarının Yayınlandığı Başlık.Bu Bölüm 2 ID li Kategoriyi Yayınlar. Kategoriyi Ona Göre Ayarlayınız.', 'options_check'),
			'id' => 'alt_kucuk_baslik_2',
			'std' => 'Kategori İsmi',
			'type' => 'text');

		$options[] = array(
		'name' => __('Küçük Ön İçerik 2', 'options_check'),
			'desc' => __('Alt Taraf 2 de Yayınlanacak Olan Kategoriyi Seçiniz.', 'options_check'),
			'id' => 'alt_kucuk_kategori_2',
			'type' => 'select',
			'options' => $options_categories);
		/////FOOTER

		$options[] = array(
			'name' => __('Footer', 'options_check'),
			'type' => 'heading');

		$options[] = array(
			'name' => __('Footer Yazı', 'options_check'),
			'desc' => __('Alt Tarafta Gözükmesini İstediğiniz Yazıyı Yazabilirsiniz.', 'options_check'),
			'id' => 'footer_yazi',
			'std' => 'Theme++ © 2016 - Tüm Hakları Saklıdır. ',
			'type' => 'text');

		$options[] = array(
			'name' => __('Destek', 'options_check'),
			'type' => 'heading');

		$options[] = array(
			'name' => __('İletişim için mail atmanız yeterlidir', 'options_check'),
			'type' => '');

		$options[] = array(
			'name' => __('ahmethcelik@gmail.com', 'options_check'),
			'type' => '');

		$options[] = array(
			'name' => __('www.ahmethcelik.com', 'options_check'),
			'type' => '');

		 return $options; }
