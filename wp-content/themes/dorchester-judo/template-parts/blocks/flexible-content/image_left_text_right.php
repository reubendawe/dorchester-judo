<?php
$image_left = get_sub_field('image_left');
$subtitle_right = get_sub_field('subtitle_right');
$title_right = get_sub_field('title_right');
$text_right = get_sub_field('text_right');
?>

<section class="img-left-text-right">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12 col-xl-6 order-2 order-xl-1">
                <?php if ($image_left) : ?>
                    <img src="<?php echo esc_url($image_left['url']); ?>" alt="<?php echo esc_attr($image_left['alt']); ?>" class="img-left">
                <?php endif; ?>
            </div>
            <div class="col-12 col-xl-6 order-1 order-xl-2 content-right">

                <?php if ($subtitle_right) : ?>
                    <p><?php echo wp_kses_post($subtitle_right); ?></p>
                <?php endif; ?>
                <?php if ($title_right) : ?>
                    <h2><?php echo wp_kses_post($title_right); ?></h2>
                <?php endif; ?>
                <?php if ($text_right) : ?>
                    <p class="py-3"><?php echo wp_kses_post($text_right); ?></p>
                <?php endif; ?>

                <?php if (have_rows('buttons_right')): ?>
                    <?php while (have_rows('buttons_right')): the_row();
                        $button_primary = get_sub_field('button_primary');
                        $button_secondary = get_sub_field('button_secondary');
                    ?>
                        <div class="pb-5 pb-xl-0">
                            <?php if ($button_primary) : ?>
                                <a
                                    href="<?= esc_url($button_primary['url']); ?>"
                                    target="<?= esc_attr($button_primary['target'] ?: '_self'); ?>"
                                    class="btn btn-primary btn-lg px-4">
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
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>