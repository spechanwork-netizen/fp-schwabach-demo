<?php
/**
 * Template Name: Fensterputzer Schwabach Landing
 *
 * Drop this file into your active theme directory (e.g. wp-content/themes/your-theme/).
 * Then create a new WordPress page and select "Fensterputzer Schwabach Landing"
 * as the page template.
 *
 * Assets:
 *   1. Upload /assets/fensterputzer-schwabach/css/style.css and js/main.js
 *      into your theme (e.g. wp-content/themes/your-theme/assets/fensterputzer-schwabach/).
 *   2. The enqueue calls below load them only on this template.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Enqueue CSS/JS only for this template
add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page_template( basename( __FILE__ ) ) ) return;

    wp_enqueue_style(
        'fps-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'fps-style',
        get_stylesheet_directory_uri() . '/assets/fensterputzer-schwabach/css/style.css',
        array( 'fps-fonts' ),
        '1.0.0'
    );
    wp_enqueue_script(
        'fps-main',
        get_stylesheet_directory_uri() . '/assets/fensterputzer-schwabach/js/main.js',
        array(),
        '1.0.0',
        true
    );
}, 20 );

get_header(); ?>

<div class="fps-landing">
<?php
// Output the static landing markup. The partial is plain HTML so it can be
// edited independently of PHP.
include __DIR__ . '/assets/fensterputzer-schwabach/partials/body.html';
?>
</div>

<?php
// NOTE: If your theme's get_header() / get_footer() inject their own header/nav
// you may want to skip them and use a blank template instead. To do that,
// replace get_header() / get_footer() above and below with a minimal HTML
// shell (see the bundled "page-fensterputzer-blank.php" alternative).
get_footer();
