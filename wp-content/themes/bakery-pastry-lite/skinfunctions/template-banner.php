<section id="banner">
    <div class="banner ">
        <?php if (is_front_page() || is_home()) { ?>
            <?php if (get_header_image()) : ?>
                <div class="homeslider">
                    <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" >
                    <?php
                    $bakery_pastry_lite_banner_heading     = get_theme_mod('banner_heading');
                    $bakery_pastry_lite_banner_sub_heading = get_theme_mod('banner_sub_heading');
                    $bakery_pastry_lite_slider_url         = get_theme_mod('bakery_pastry_lite_slider_url');
                    $bakery_pastry_lite_slider_readmore    = get_theme_mod('bakery_pastry_lite_slider_readmore');

                    if (!empty($bakery_pastry_lite_banner_heading) || !empty($bakery_pastry_lite_banner_sub_heading)) {
                        ?>
                        <div class="bannercontent">
                            <div class="container">
                                <div class="bannercaption">
                                    <div class="banner_heading"><h3><?php echo esc_html($bakery_pastry_lite_banner_heading); ?></h3></div><!--banner_heading-->
                                    <div class="banner_sub_heading"><?php echo esc_html($bakery_pastry_lite_banner_sub_heading); ?></div><!--banner_heading-->
                                    <?php if (!empty($bakery_pastry_lite_slider_url)) { ?>
                                        <div class="banner_button">
                                            <a class="button bannerbutton" href="<?php echo esc_url($bakery_pastry_lite_slider_url); ?>"><?php echo esc_html($bakery_pastry_lite_slider_readmore); ?></a>
                                        </div><!--banner_button-->
                                    <?php } ?>
                                </div><!--bannercaption-->
                            </div><!--container-->
                        </div><!--bannercontent-->
                    <?php } ?>
                </div>  <!--homeslider-->


            <?php endif; ?>
        <?php
        } elseif (is_page()) {
            if (has_post_thumbnail()) {
                the_post_thumbnail('full');
            } else {
                ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/skin/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>">          
            <?php } ?>
        <?php } else { ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/skin/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>">          
<?php } ?>
    </div><!--banner-->
</section><!--banner-->

