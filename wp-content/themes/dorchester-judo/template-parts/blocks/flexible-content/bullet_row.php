<?php
$bullet_subtitle = get_sub_field('bullet_subtitle');
$bullet_title = get_sub_field('bullet_title');
?>

<section class="bullets-section">
    <div class="container">

        <div class="row">
            <div>
                <?php if ($bullet_subtitle) : ?>
                    <p><?php echo wp_kses_post($bullet_subtitle); ?></p>
                <?php endif; ?>

                <?php if ($bullet_title) : ?>
                    <h1 class="display-5 fw-bold title-pad"><?php echo wp_kses_post($bullet_title); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('icons_repeater')): ?>
            <div class="row">
                <?php while (have_rows('icons_repeater')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $icon_label = get_sub_field('icon_label');
                    ?>

                    <div class="col-12 col-sm-6 col-md-3 text-center icon-pad">
                        <?php if ($icon) : ?>
                            <img
                                src="<?php echo esc_url($icon['url']); ?>"
                                alt="<?php echo esc_attr($icon['alt']); ?>"
                                class="icon mb-2">
                        <?php endif; ?>
                        <?php if ($icon_label) : ?>
                            <p><?php echo wp_kses_post($icon_label); ?></p>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>