<?php
/**
 * Template Name: Fensterputzer Schwabach Landing (Blank)
 * Template Post Type: page
 *
 * A full-width landing template that bypasses the theme header/footer.
 * Use this if your theme's nav/footer would conflict with the bundled ones.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<meta name="description" content="Fensterputzer Schwabach: Fenster, Wintergarten, Jalousien, Rollos und Kellerschacht – Festpreis, kostenlose Besichtigung. Privat &amp; Gewerbe seit 2002.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/fensterputzer-schwabach/css/style.css' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php include __DIR__ . '/assets/fensterputzer-schwabach/partials/body.html'; ?>
<script src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/fensterputzer-schwabach/js/main.js' ); ?>" defer></script>
<?php wp_footer(); ?>
</body>
</html>
