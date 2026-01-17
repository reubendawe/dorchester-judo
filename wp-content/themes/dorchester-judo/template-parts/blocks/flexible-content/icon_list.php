<?php
$icon_subtitle = get_sub_field('icon_subtitle');
$icon_title = get_sub_field('icon_title');
?>

<section class="icon-list-section">
    <div class="container">
        <div class="row">
            <div class="text-center px-4">
                <?php if ($icon_subtitle) : ?>
                    <p><?php echo wp_kses_post($icon_subtitle); ?></p>
                <?php endif; ?>

                <?php if ($icon_title) : ?>
                    <h1 class="display-5 fw-bold title-pad"><?php echo wp_kses_post($icon_title); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('icon_repeater')): ?>
            <div class="row px-4 g-5 icon-padding">
                <?php while (have_rows('icon_repeater')) : the_row(); ?>
                    <?php
                    $icon_image = get_sub_field("icon_image");
                    $icon_strong_text = get_sub_field("icon_strong_text");
                    $icon_text = get_sub_field("icon_text");
                    ?>

                    <div class="col-12 col-md-6 icon-pad">
                        <?php if ($icon_image) : ?>
                            <div class="text-center">
                                <img
                                    src="<?php echo esc_url($icon_image['url']); ?>"
                                    alt="<?php echo esc_attr($icon_image['alt']); ?>"
                                    class="list-icon mb-2">
                            </div>
                        <?php endif; ?>
                        <?php if ($icon_strong_text) : ?>
                            <p><strong><?php echo wp_kses_post($icon_strong_text); ?>:</strong>
                            <?php endif; ?>
                            <?php if ($icon_text) : ?>
                                <?php echo wp_kses_post($icon_text); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

</section>