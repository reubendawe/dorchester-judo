<!-- Hero image -->

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>
        <?php if (get_row_layout() == 'hero_section') : ?>
            <?php
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
                                <?php if ($button_primary = get_sub_field('button_primary')) : ?>
                                    <a
                                        href="<?= esc_url($button_primary['url']); ?>"
                                        target="<?= esc_attr($button_primary['target'] ?: '_self'); ?>"
                                        class="btn btn-primary btn-lg px-4 gap-3">
                                        <?= esc_html($button_primary['title']); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($button_secondary = get_sub_field('button_secondary')) : ?>
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

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Bullet row -->

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>

        <?php if (get_row_layout() == 'bullet_row') : ?>

            <?php
            $bullet_subtitle = get_sub_field('bullet_subtitle');
            $bullet_title = get_sub_field('bullet_title');
            ?>

            <section class="bullets-section">
                <div class="container">

                    <div class="row">
                        <div class="text-center px-4">
                            <?php if ($bullet_subtitle) : ?>
                                <p><?php echo wp_kses_post($bullet_subtitle); ?></p>
                            <?php endif; ?>

                            <?php if ($bullet_title) : ?>
                                <h1 class="display-5 fw-bold title-pad"><?php echo wp_kses_post($bullet_title); ?></h1>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (have_rows('icons_repeater')): ?>
                        <div class="row px-4">
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
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center px-4 icon-cta">
                            <button type="button" class="btn btn-primary btn-lg">Primary Action</button>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>