<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header class="top_header">
        <div class="wrapper cf">
            <div class="header_third search_section menu_buttom">
                search
            </div>
            <div class="header_third logo_section">
                <a href="<?php echo home_url("/");?>" class="logo_link"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
            </div>
            <div class="header_third social_section">
                <?php if(aletheme_get_options('yt')){ ?><a href="<?php echo aletheme_get_options('yt') ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
                <?php if(aletheme_get_options('insta')){ ?><a href="<?php echo aletheme_get_options('insta') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
                <?php if(aletheme_get_options('twi')){ ?><a href="<?php echo aletheme_get_options('twi') ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
                <?php if(aletheme_get_options('fb')){ ?><a href="<?php echo aletheme_get_options('fb') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
            </div>
        </div>
    </header>
    <section class="home_slider">

    </section>