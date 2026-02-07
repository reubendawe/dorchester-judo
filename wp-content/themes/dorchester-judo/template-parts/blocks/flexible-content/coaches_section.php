<?php
$coaches_subtitle = get_sub_field('coaches_subtitle');
$coaches_title = get_sub_field('coaches_title');
$coaches_button = get_sub_field('coaches_button');
?>

<section class="cards-section bg-light">
    <div class="container">
        <div class="row">
            <div>
                <?php if ($coaches_subtitle) : ?>
                    <p><?php echo wp_kses_post($coaches_subtitle); ?></p>
                <?php endif; ?>

                <?php if ($coaches_title) : ?>
                    <h1 class="display-5 fw-bold title-pad"><?php echo wp_kses_post($coaches_title); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('coaches_repeater')): ?>
            <div class="row g-4 card-padding">
                <?php while (have_rows('coaches_repeater')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $bio = get_sub_field('bio');
                    $cta = get_sub_field('cta');
                    ?>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card rounded-0 h-100 border border-secondary">
                            <?php if ($image) : ?>
                                <img
                                    src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_url($image['alt']); ?>"
                                >
                            <?php endif; ?>

                            <div class="card-body">
                                <?php if ($title) : ?>
                                    <h5 class="card-title"><?php echo wp_kses_post($title); ?></h5>
                                <?php endif; ?>

                                <?php if ($bio) : ?>
                                    <p class="card-text"><?php echo wp_kses_post($bio); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="d-grid gap-2 d-sm-flex icon-cta">
            <?php if ($coaches_button) : ?>
                <a
                    href="<?= esc_url($coaches_button['url']); ?>"
                    target="<?= esc_attr($coaches_button['target'] ?: '_self'); ?>"
                    class="btn btn-primary btn-lg px-4 gap-3">
                    <?= esc_html($coaches_button['title']); ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>