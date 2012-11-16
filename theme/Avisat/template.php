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
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/<?php get_page_slug(); ?>.css" media="all" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/lib/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="<?php get_theme_url() ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
	<script type="text/javascript">$(document).ready(function() { $('.fancybox').fancybox(); });</script>
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
    </div>

</body>
</html>