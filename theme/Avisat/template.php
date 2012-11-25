<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nume = $_POST['nume'];
	$email = $_POST['email'];
	$subiect = $_POST['subiect'];
	$mesaj = $_POST['mesaj'];
	
	$message = '';
	$message .= '<p><b>Nume:</b> '.$nume.'</p>';
	$message .= '<p><b>E-mail:</b> '.$email.'</p>';
	$message .= '<p><b>Subiect:</b> '.$subiect.'</p>';
	$message .= '<p><b>E-mail:</b> '.$email.'</p>';
	$message .= '<p><b>Mesaj:</b><br />'.$subiect.'</p>';

	mail('hecaru2004@yahoo.com', 'Mesaj din site ('.$subiect.')', $message, 'From: '.$email);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>    
	<meta name="robots" content="index, follow" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 1329px)" href="<?php get_theme_url(); ?>/1024x768/style.css" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 1329px)" href="<?php get_theme_url(); ?>/1024x768/<?php get_page_slug(); ?>.css"/>
  	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1330px)" href="<?php get_theme_url(); ?>/1366x768/style.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1330px)" href="<?php get_theme_url(); ?>/1366x768/<?php get_page_slug(); ?>.css" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/jquery/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/jquery/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/jquery.fancybox.css?v=2.1.2" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
	<script type="text/javascript">
		$(document).ready(function() { 
			$('.fancybox').fancybox();
		});
		var $galerie_enable = true;
		function galerie_next() {
			if ($galerie_enable == false) return;
			$galerie_enable = false;
			$x = $('.galerie_container').position().left + $('.galerie_container a').length * 130 + 20 - $('.galerie_container').width();
			$('.galerie_container').animate({left: '-=' + Math.min($x, $('.galerie_container').width())}, 1500, null, function() {$galerie_enable = true;});
		}
		function galerie_prev() {
			if ($galerie_enable == false) return;
			$galerie_enable = false;
			$x = -$('.galerie_container').position().left;
			$('.galerie_container').animate({left: '+=' + Math.min($x, $('.galerie_container').width())}, 1500, null, function() {$galerie_enable = true;});
		}
		var $constructii_enable = true;
		function constructii_next() {
			if ($constructii_enable == false) return;
			$constructii_enable = false;
			$x = $('.constructii_container').position().top + Math.floor(($('.constructii_container a').length + 2) / 3) * 100 - 300;
			$('.constructii_container').animate({top: '-=' + Math.min($x, 300)}, 1000, null, function() {$constructii_enable = true;});
		}
		function constructii_prev() {
			if ($constructii_enable == false) return;
			$constructii_enable = false;
			$x = -$('.constructii_container').position().top;
			$('.constructii_container').animate({top: '+=' + Math.min($x, 300)}, 1000, null, function() {$constructii_enable = true;});
		}
		var $mobilier_enable = true;
		function mobilier_next() {
			if ($mobilier_enable == false) return;
			$mobilier_enable = false;
			$x = $('.mobilier_container').position().top + Math.floor(($('.mobilier_container a').length + 2) / 3) * 100 - 300;
			$('.mobilier_container').animate({top: '-=' + Math.min($x, 300)}, 1000, null, function() {$mobilier_enable = true;});
		}
		function mobilier_prev() {
			if ($mobilier_enable == false) return;
			$mobilier_enable = false;
			$x = -$('.mobilier_container').position().top;
			$('.mobilier_container').animate({top: '+=' + Math.min($x, 300)}, 1000, null, function() {$mobilier_enable = true;});
		}
	</script>
</head>
<body id="<?php get_page_slug(); ?>">

	<div class="wrapper">
    	<div class="sus">
        </div>
        
        <div class="stanga">
        	<div class="logo">
            	<a href="index.php"><img src="<?php get_theme_url(); ?>/images/logo.png" alt></a>
            </div>
            <div class="descriere">
            	<?php get_component('descriere'); ?>
            </div>
            <ul class="menu_ul">
            	<?php get_navigation(return_page_slug()); ?>
            </ul>
            <div class="jos">
           		<?php get_component('contact'); ?>
            </div>	
        </div>

        <div class="dreapta">
	        <div class="dreapta1">
	        	<?php get_page_content();?>
	        </div>
	        <div class="dreapta2">
	           	<?php get_component(return_page_slug().'_dreapta2'); ?>
			</div>
			<div class="dreapta3">
	           	<?php get_component(return_page_slug().'_dreapta3'); ?>
			</div>
	        <div class="social">
	           	<?php get_component('social'); ?>
            </div>
        </div>
    </div>
    <div class="galerie">
		<p>
		</p>
		<a class="galerie_prev" href="#" onclick="return galerie_prev();"></a>
		<a class="galerie_next" href="#" onclick="return galerie_next();"></a>
		<div class="galerie_wrapper">
			<div class="galerie_container">
<?php
	get_i18n_gallery('galerie');
?>
			</div>
		</div>
    </div>

</body>
</html>