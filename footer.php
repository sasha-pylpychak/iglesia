
    <footer class="main-footer">
        <div class="top_footer">
            <div class="wrapper">
                <div class="footer_logo footer_inner">
                    <?php if(ale_get_option('footerlogo')){ ?>
                        <a href="<?php echo home_url("/"); ?>" class="logo_link"><img src="<?php echo ale_get_option('footerlogo'); ?>" /></a>
                    <?php  } ?>
                </div>
                <div class="menu_info footer_inner">
                    Info
                </div>
                <div class="contact footer_inner">
                    Contact
                </div>
                <div class="twitter footer_inner">
                    Twitter
                </div>
                </div>
            </div>
        <div class="bottom_footer">
            <div class="wrapper">
                <div class="copyrights">
                    <?php if (ale_get_option('copyrights')) : ?>
                        <?php echo ale_get_option('copyrights'); ?>
                    <?php else: ?>
                       &copy; <?php _e('2018 All Rights Reserved “Iglesia” ', 'aletheme')?>
                    <?php endif; ?>
                </div>
                <div class="footer_social">
                    social
                </div>
            </div>
        </div>
    </footer>

<!--    <ul class="left">-->
<!--        --><?php //if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
<!--        --><?php //if(ale_get_option('rssicon')){?><!--<li class="rss"><a href="--><?php //echo home_url(); ?><!--/feed" rel="external"></a></li>--><?php //} ?>
<!--    </ul>-->
<!---->
<!--    <!-- Copy -->

<!---->
<!--    --><?php
//    if ( has_nav_menu( 'footer_menu' ) ) {
//        wp_nav_menu(array(
//            'theme_location'=> 'footer_menu',
//            'menu'			=> 'Footer Menu',
//            'menu_class'	=> 'footermenu cf',
//            'walker'		=> new Aletheme_Nav_Walker(),
//            'container'		=> '',
//        ));
//    }
//    ?>



    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>