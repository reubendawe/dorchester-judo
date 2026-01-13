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

<div class="bg-dark sticky-top">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4 text-white">Simple header</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">Classes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page">Contact</a>
                </li>
            </ul>
        </header>
    </div>
</div>
