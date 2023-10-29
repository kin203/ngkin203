<?php 
$bakery_pastry_lite_phone = get_theme_mod('bakery_pastry_lite_phone');
$bakery_pastry_lite_email = get_theme_mod('bakery_pastry_lite_email'); 
$bakery_pastry_lite_fb      = get_theme_mod('bakery_pastry_lite_fb');
$bakery_pastry_lite_twitter = get_theme_mod('bakery_pastry_lite_twitter');
$bakery_pastry_lite_youtube = get_theme_mod('bakery_pastry_lite_youtube');
$bakery_pastry_lite_in      = get_theme_mod('bakery_pastry_lite_in');
$bakery_pastry_lite_pin     = get_theme_mod('bakery_pastry_lite_pin');
if (
    !empty($bakery_pastry_lite_phone) || 
    !empty($bakery_pastry_lite_email) ||
    !empty($bakery_pastry_lite_fb) ||
    !empty($bakery_pastry_lite_twitter) ||
    !empty($bakery_pastry_lite_youtube) ||
    !empty($bakery_pastry_lite_in) ||
    !empty($bakery_pastry_lite_pin)
    ) {
?>
<section id="header" class="header_top row">  
    <div class="container">
        <!--header section start -->
        <div class="header_left headercommon"> 
                <div class="phone-email header_contact">
                <ul>
                    <li>
                       
                        <?php if (!empty($bakery_pastry_lite_phone)) { ?>
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:<?php echo esc_html($bakery_pastry_lite_phone); ?>" title="<?php echo esc_attr($bakery_pastry_lite_phone); ?>"><?php echo esc_html($bakery_pastry_lite_phone); ?></a>
                        <?php } ?>           
                    </li>
                    <li>
                        
                        <?php if (!empty($bakery_pastry_lite_email)) { ?>
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a title="<?php echo esc_attr($bakery_pastry_lite_email); ?>" href="mailto:<?php echo esc_attr($bakery_pastry_lite_email); ?>"><?php echo esc_html($bakery_pastry_lite_email); ?></a>
                        <?php } ?>
                    </li>
                   
                </ul>
                <div clear="both"></div>
            </div><!--phone-email-->
            <div class="clear"></div>
        </div><!--header_left-->
        <div class="header_right headercommon">
            <div class="header_social">
                <ul>
                    <?php
                   
                    ?>
                    <?php if (!empty($bakery_pastry_lite_fb)) { ?>
                        <li><a title="<?php esc_attr_e('Facebook', 'bakery-pastry-lite'); ?>" class="fa fa-facebook" target="_blank" href="<?php echo esc_url($bakery_pastry_lite_fb); ?>"></a> </li>
                    <?php } ?>
                    <?php if (!empty($bakery_pastry_lite_twitter)) { ?>
                        <li><a title="<?php esc_attr_e('twitter', 'bakery-pastry-lite'); ?>" class="fa fa-twitter" target="_blank" href="<?php echo esc_url($bakery_pastry_lite_twitter); ?>"></a></li>
                    <?php } ?>
                    <?php if (!empty($bakery_pastry_lite_youtube)) { ?>
                        <li><a title="<?php esc_attr_e('youtube', 'bakery-pastry-lite'); ?>" class="fa fa-youtube" target="_blank" href="<?php echo esc_url($bakery_pastry_lite_youtube); ?>"></a></li>
                    <?php } ?>
                    <?php if (!empty($bakery_pastry_lite_in)) { ?>
                        <li><a title="<?php esc_attr_e('linkedin', 'bakery-pastry-lite'); ?>" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url($bakery_pastry_lite_in); ?>"></a></li>
                    <?php } ?>

                    <?php if (!empty($bakery_pastry_lite_pin)) { ?>
                        <li><a title="<?php esc_attr_e('linkedin', 'bakery-pastry-lite'); ?>" class="fa fa-pinterest" target="_blank" href="<?php echo esc_url($bakery_pastry_lite_pin); ?>"></a></li>
                    <?php } ?>

                </ul>
                </div><!--header_social-->
        </div>
        
        <!-- header section end -->     
        <div class="clear"></div>
    </div><!--container-->
</section><!--header_top-->
<div class="clear"></div>
<?php } ?> 

<section id="header_bottom">
    <div class="container">
    <div class="header_bottom_left headerlogo">
            <div class="logo">
                <?php if (has_custom_logo()) { ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bakery_pastry_lite_the_custom_logo(); ?></a>
                <?php }if (display_header_text() == true) { ?>
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                <?php } ?>
            </div><!-- logo -->
        </div><!--header_bottom_left-->
        <div class="header_bottom_right" >
            <div id="main_navigation">
                <div class="main-navigation-inner mainwidth">
                    <div class="toggle">
                        <a class="togglemenu" href="#"><?php esc_html_e('Menu', 'bakery-pastry-lite'); ?></a>
                        <div class="clear"></div>
                    </div><!-- toggle --> 
                    <div class="sitenav">
                        <div class="nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary'
                            ));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </div><!-- site-nav -->
                    <div class="clear"></div>
                </div><!--main-navigation-->
                <div class="clear"></div>
            </div><!--main_navigation-->

        </div><!--header_bottom_right-->
        
        <div class="clear"></div>
    </div><!--container-->
</section>