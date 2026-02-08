<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dorchester_judo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<div class="sticky-top header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark py-4">
            <a href="#" class="text-white fs-4">
                Simple header
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center text-center pm-0">
                    <li class="nav-item mx-3 dropdown">
                        <a href="#" class="nav-link text-white" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a href="<?php echo get_permalink(47); ?>" class="nav-link text-white" aria-current="page">About</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a href="<?php echo get_permalink(113); ?>" class="nav-link text-white" aria-current="page">Classes</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a href="#" class="nav-link text-white" aria-current="page">Blog</a>
                    </li>
                    <li class="mx-3 contact-btn btn-underline">
                        <a href="<?php echo get_permalink(13); ?>" class="nav-link text-white" aria-current="page">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>