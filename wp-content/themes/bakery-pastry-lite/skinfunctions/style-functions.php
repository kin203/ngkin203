<?php

function bakery_pastry_lite_style() {
    wp_enqueue_style('bakery-pastry-lite-basic-style', get_stylesheet_uri());
    wp_enqueue_style('bakery-pastry-lite-style', get_template_directory_uri() . '/skin/css/main.css');
    wp_enqueue_style('bakery-pastry-lite-responsive', get_template_directory_uri() . '/skin/css/responsive.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/skin/css/font-awesome.css');
    wp_enqueue_script('bakery-pastry-lite-toggle', get_template_directory_uri() . '/skin/js/toggle.js', array('jquery'));
    wp_enqueue_script('bakery-pastry-lite-customjs', get_template_directory_uri() . '/skin/js/customjs.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'bakery_pastry_lite_style');
?>
<?php

function bakery_pastry_lite_header_style() {
    $bakery_pastry_lite_header_text_color = get_header_textcolor();
    if (get_theme_support('custom-header', 'default-text-color') === $bakery_pastry_lite_header_text_color) {
        return;
    }
    echo '<style id="bakery-pastry-lite-custom-header-styles" type="text/css">';
    if ('blank' !== $bakery_pastry_lite_header_text_color) {
        echo '.headerlogo .logo a,
            .blog-post h3 a,
            .blog-post .pageheading h1
			 {
				color: #' . esc_attr($bakery_pastry_lite_header_text_color) . '
			}';
    }
    echo '</style>';
}
