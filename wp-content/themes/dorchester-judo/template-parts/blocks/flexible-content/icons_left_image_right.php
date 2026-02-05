<?php
$subtitle_left = get_sub_field('subtitle_left');
$title_left = get_sub_field('title_left');
$image_right = get_sub_field('image_right');
?>

<section class="icons-left-img-right">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 content-left">

                <p><?php echo wp_kses_post($subtitle_left); ?></p>
                <h2><?php echo wp_kses_post($title_left); ?></h2>

                <div class="container">
                    <div class="row">
                        <?php if (have_rows('icons_repeater_left')): ?>
                            <?php while (have_rows('icons_repeater_left')) : the_row();
                            $icon = get_sub_field('icon');
                            $text = get_sub_field('text');
                            ?>
                                <div class="col-6 py-3">
                                    <?php if ($icon) : ?>
                                        <img
                                            src="<?php echo esc_url($icon['url']); ?>"
                                            alt="<?php echo esc_attr($icon['alt']); ?>"
                                            class="list-icon mb-2">
                                    <?php endif; ?>
                                    <?php if ($text) : ?>
                                        <p><?php echo esc_url($text); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (have_rows('buttons_left')): ?>
                    <?php while (have_rows('buttons_left')): the_row();
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
            <div class="col-12 col-xl-6 d-flex align-items-center">
                <?php if ($image_right) : ?>
                    <img src="<?php echo esc_url($image_right['url']); ?>" alt="<?php echo esc_url($image_right['alt']); ?>" class="img-right">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>