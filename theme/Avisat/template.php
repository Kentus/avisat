<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/style.css" media="all" />

</head>
<body id="<?php get_page_slug(); ?>" >

	<div class="wrapper">
    	<div class="sus">
        </div>
        
        <div class="stanga">
        	<div class="logo">
            </div>
            <div class="descriere">
            	<?php get_component('descriere'); ?>
            </div>
            <ul>
            	<?php get_navigation(return_page_slug()); ?>
            </ul>
            <div class="jos">
           		<?php get_component('contact'); ?>
            </div>	
        </div>
        
        <div class="dreapta">
        
        	<div class="dreapta1">
            </div>
            <div class="dreapta2">
                <div class="dreapta3">
                </div>
                
            </div>
            
            <div class="social">
            	<?php get_component('social'); ?>
            </div>
        </div>
        <div class="galerie">
        </div>
    </div>

</body>
</html>