<?php
if (!isset($content_width))
    $content_width = 900;

add_action('admin_menu', 'bakery_pastry_lite_pros');

function bakery_pastry_lite_pros() {
    add_theme_page(esc_html__('Bakery Pastry Pro Details', 'bakery-pastry-lite'), esc_html__('Bakery Pastry Pro Details', 'bakery-pastry-lite'), 'edit_theme_options', 'bakery_pastry_lite_pro', 'bakery_pastry_lite_pro_details');
}

function bakery_pastry_lite_pro_details() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Bakery Pastry Pro Details', 'bakery-pastry-lite'); ?></h1>

        <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/skin/images/innerbanner.jpg" alt="<?php bloginfo('name'); ?>" style=" width: 100%;">  
        </div>
        
        <p><strong> <?php esc_html_e('Description: ', 'bakery-pastry-lite'); ?></strong><?php esc_html_e('Bakery Pastry Lite WordPress has used for most of all type of Ice cream business including bakery, coffee shop, bar, bistro, restaurant, food blogger , cakes and pastries shop, cafe, dessert shops, fast food chains, ice cream parlors, bread shop, cupcake store, pastry house, cake studio, cookies, baked delicacies, donuts and muffins shop, chocolate, beverages, recipe blog, baking lessons,  bakers,  cook,  confectionery, bread-or-cake-or-biscuit-factory, bakehouse, fast food chain, burger, muffin pastry shop, Raw Wheat, baklava, Golden Flour, Natures Gifts Bakery, Bread & Butter, cookery, candy shop, Piece of Cake, cake shop and many more.', 'bakery-pastry-lite'); ?></p>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_THEMEURL); ?>" target="_blank"><?php esc_html_e('Theme Url', 'bakery-pastry-lite'); ?></a>	
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_PROURL); ?>" target="_blank"><?php esc_html_e('Pro Theme Url', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_PURCHASEURL); ?>" target="_blank"><?php esc_html_e('Click To Purchase', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_PURCHASEURL); ?>" target="_blank"><?php esc_html_e('Price: $29.99 Only', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_DOCURL); ?>" target="_blank"><?php esc_html_e('Documentation', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_DEMOURL); ?>" target="_blank"><?php esc_html_e('View Demo', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(bakery_pastry_lite_SUPPORTURL); ?>" target="_blank"><?php esc_html_e('Support', 'bakery-pastry-lite'); ?></a>
        <a class="button button-primary button-large" href="mailto:<?php echo esc_html(bakery_pastry_lite_SUPPORT_EMAIL); ?>" target="_blank"><?php esc_html_e('Support Email', 'bakery-pastry-lite'); ?></a>
        
        <div class="clear"></div>
    </div> 
    </div>
    
<?php
}

add_action('customize_register', 'bakery_pastry_lite_customize_register');
define('bakery_pastry_lite_PROURL', 'https://www.themescave.com/themes/wordpress-theme-bakery-pastry-pro/');
define('bakery_pastry_lite_THEMEURL', 'https://www.themescave.com/themes/wordpress-theme-bakery-pastry-lite/');
define('bakery_pastry_lite_DOCURL', 'https://www.themescave.com/documentation/bakery-pastry-pro');
define('bakery_pastry_lite_DEMOURL', 'https://www.themescave.com/demo/bakery-pastry-pro');
define('bakery_pastry_lite_SUPPORTURL', 'https://www.themescave.com/forums/forum/bakery-pastry-pro/');
define('bakery_pastry_lite_PURCHASEURL', 'https://www.themescave.com/themes/?add-to-cart=3835');
define('bakery_pastry_lite_SUPPORT_EMAIL', 'support@themescave.com');