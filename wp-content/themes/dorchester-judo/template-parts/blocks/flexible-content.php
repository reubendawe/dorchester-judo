<!-- Hero image -->

<?php if ( have_rows('flexible_content')) : ?>
    <?php while ( have_rows('flexible_content') ) : the_row(); ?>
        <?php if ( get_row_layout() == 'hero_section') : ?>
            <?php
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<section class="hero-section">
   <div class="px-4 py-5 my-5 text-center">

   <?php if ( $title ) : ?>
    <h1 class="display-5 fw-bold"><?php echo wp_kses_post($title); ?></h1>
   <?php endif; ?>

    <div class="col-lg-6 mx-auto">
        <p class="Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins."></p>
    </div>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Primary button</button>
    </div>
   </div>
</section>
