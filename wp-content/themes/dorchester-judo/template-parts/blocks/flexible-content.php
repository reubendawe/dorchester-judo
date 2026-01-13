<!-- Hero image -->

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>
        <?php if (get_row_layout() == 'hero_section') : ?>
            <?php
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<section class="hero-section">
    <div class="px-4 py-5 my-5 text-center">
        <?php if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hero-image">
        <?php endif; ?>

        <?php if ($title) : ?>
            <h1 class="display-5 fw-bold"><?php echo wp_kses_post($title); ?></h1>
        <?php endif; ?>

        <div class="d-grid gap-2 d-sm-flex pt-3 justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Primary button</button>
        </div>
    </div>
</section>
