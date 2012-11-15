<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }?>
<!DOCTYPE html>
<html>
<head>
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url() ?>/<?php get_page_slug(); ?>.css" media="all" />

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