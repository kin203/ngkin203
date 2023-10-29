<?php

/**
 * @package Bakery Pastry Lite
 */

require_once get_template_directory() . "/skinfunctions/customization.php";
require_once get_template_directory() . "/skinfunctions/style-functions.php";
require_once get_template_directory() . "/skinfunctions/theme-functions.php";
if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        do_action('wp_body_open');
    }

}

function bakery_pastry_lite_embed_html($html) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'bakery_pastry_lite_embed_html', 10, 3);
add_filter('video_embed_html', 'bakery_pastry_lite_embed_html');
add_image_size('bakery-pastry-lite-home-box-size', 400, 250, true);

function bakery_pastry_lite_get_excerpt($postid, $post_count_size) {
    $excerpt = get_post_field('post_content', $postid);

    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $post_count_size);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    return $excerpt;
}

function bakery_pastry_lite_sanitize_phone_number($phone) {
    return preg_replace('/[^\d+]/', '', $phone);
}

if (!function_exists('bakery_pastry_lite_entry_meta')) :

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function bakery_pastry_lite_entry_meta() {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'bakery-pastry-lite'));
            if ($categories_list && bakery_pastry_lite_categorized_blog()) {
                printf('<span class="cat-links">%1$s</span>', $categories_list); // WPCS: XSS OK.
            }
        }

        if (is_single() && !post_password_required() && ( comments_open() || get_comments_number() )) {
            echo '<span class="comments-link">';
            /* translators: %s: post title */
            comments_popup_link(sprintf(wp_kses(__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'bakery-pastry-lite'), array('span' => array('class' => array()))), get_the_title()));
            echo '</span>';
        }
    }

endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function bakery_pastry_lite_categorized_blog() {
    if (false === ( $all_the_cool_cats = get_transient('bakery_pastry_lite_categories') )) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories(array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number'     => 2,
        ));

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count($all_the_cool_cats);

        set_transient('bakery_pastry_lite_categories', $all_the_cool_cats);
    }

    if ($all_the_cool_cats > 1) {
        // This blog has more than 1 category so bakery_pastry_lite_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so bakery_pastry_lite_categorized_blog should return false.
        return false;
    }
}

if (!function_exists('bakery_pastry_lite_posted_on')) :

    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function bakery_pastry_lite_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';


        $time_string = sprintf(
                $time_string,
                esc_attr(get_the_date(DATE_W3C)),
                esc_html(get_the_date())
        );
        echo '<span class="posted-on">';
        printf(
                /* translators: %s: Publish date. */
                esc_html('%s'),
                $time_string // phpcs:ignore WordPress.Security.EscapeOutput
        );
        echo '</span>';
    }

endif;


function bakery_pastry_lite_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bakery-pastry-lite' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bakery-pastry-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
	) );	
	register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'bakery-pastry-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'bakery-pastry-lite' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'bakery-pastry-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'bakery-pastry-lite' ),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 3', 'bakery-pastry-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'bakery-pastry-lite' ),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 4', 'bakery-pastry-lite' ),
        'description'   => esc_html__( 'Appears on footer', 'bakery-pastry-lite' ),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );
}
add_action( 'widgets_init', 'bakery_pastry_lite_widgets_init' );


if ( ! function_exists( 'bakery_pastry_lite_setup' ) ) :
function bakery_pastry_lite_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
        add_theme_support("wp-block-styles");
        add_theme_support("responsive-embeds");
        add_theme_support("align-wide");
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bakery-pastry-lite' )
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	

		$defaults = array(
		'default-image'          => get_template_directory_uri() .'/skin/images/slider.jpg',
		'default-text-color' => 'f03e3e',
		'width'                  => 1600,
		'height'                 => 550,
		'uploads'                => true,
		'wp-head-callback'   => 'bakery_pastry_lite_header_style',			
		);
		add_theme_support( 'custom-header', $defaults );

		//custom logo
		 $bakery_pastry_lite_custom_logo = array(
 		'height'      => 56,
 		'width'       => 224,
 		'flex-height' => true,
 		'flex-width'  => true,
 		'header-text' => array( 'site-title', 'site-description' ),
 		);
 	add_theme_support( 'custom-logo', $bakery_pastry_lite_custom_logo );
        
        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));
        
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
 	
} 
endif; // bakery_pastry_lite_setup
add_action( 'after_setup_theme', 'bakery_pastry_lite_setup' );

if ( ! function_exists( 'bakery_pastry_lite_the_custom_logo' ) ) :
function bakery_pastry_lite_the_custom_logo() {
    the_custom_logo();
}
endif;

if ( ! isset( $content_width ) ) {
	$content_width = 600;
}