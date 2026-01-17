<?php
// Hero section template
$image = get_sub_field('image');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$button_primary = get_sub_field('button_primary');
$button_secondary = get_sub_field('button_secondary');
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="px-4 py-5 my-5 text-center">

                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hero-image">
                <?php endif; ?>

                <?php if ($subtitle) : ?>
                    <p><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <h1 class="display-5 fw-bold"><?php echo wp_kses_post($title); ?></h1>
                <?php endif; ?>

                <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-sm-center">
                    <?php if ($button_primary) : ?>
                        <a
                            href="<?= esc_url($button_primary['url']); ?>"
                            target="<?= esc_attr($button_primary['target'] ?: '_self'); ?>"
                            class="btn btn-primary btn-lg px-4 gap-3">
                            <?= esc_html($button_primary['title']); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($button_secondary) : ?>
                        <a
                            href="<?= esc_url($button_secondary['url']); ?>"
                            target="<?= esc_attr($button_secondary['target'] ?: '_self'); ?>"
                            class="btn btn-outline-secondary btn-lg px-4">
                            <?= esc_html($button_secondary['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
