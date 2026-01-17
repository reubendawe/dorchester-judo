<?php
$cards_subtitle = get_sub_field('cards_subtitle');
$cards_title = get_sub_field('cards_title');
$cards_button = get_sub_field('cards_button');
?>

<section class="cards-section bg-light">
    <div class="container">
        <div class="row">
            <div class="text-center px-4">
                <?php if ($cards_subtitle) : ?>
                    <p><?php echo wp_kses_post($cards_subtitle); ?></p>
                <?php endif; ?>

                <?php if ($cards_title) : ?>
                    <h1 class="display-5 fw-bold title-pad"><?php echo wp_kses_post($cards_title); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('cards_repeater')): ?>
            <div class="row g-4 card-padding">
                <?php while (have_rows('cards_repeater')) : the_row(); ?>
                    <?php
                    $card_image = get_sub_field('card_image');
                    $card_title = get_sub_field('card_title');
                    $card_bio = get_sub_field('card_bio');
                    $card_cta = get_sub_field('card_cta');
                    ?>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 h-100 border border-secondary">
                            <?php if ($card_image) : ?>
                                <img
                                    src="<?php echo esc_url($card_image['url']); ?>"
                                    alt="<?php echo esc_url($icon['alt']); ?>"
                                >
                            <?php endif; ?>

                            <div class="card-body">
                                <?php if ($card_title) : ?>
                                    <h5 class="card-title"><?php echo wp_kses_post($card_title); ?></h5>
                                <?php endif; ?>

                                <?php if ($card_bio) : ?>
                                    <p class="card-text"><?php echo wp_kses_post($card_bio); ?></p>
                                <?php endif; ?>

                                <?php if ($card_cta) : ?>
                                    <a
                                        href="<?= esc_url($card_cta['url']); ?>"
                                        target="<?= esc_attr($card_cta['target'] ?: '_self'); ?>"
                                        class="btn btn-primary">
                                        <?= esc_html($card_cta['title']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center px-4 icon-cta">
            <?php if ($cards_button) : ?>
                <a
                    href="<?= esc_url($card_button['url']); ?>"
                    target="<?= esc_attr($cards_button['target'] ?: '_self'); ?>"
                    class="btn btn-primary btn-lg px-4 gap-3">
                    <?= esc_html($cards_button['title']); ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>