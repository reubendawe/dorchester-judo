<?php
$testimonials_repeater = get_sub_field('testimonials_repeater');
?>

<section class="testimonials-section">
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container">

            <div class="carousel-item active">
                <?php if (have_rows('testimonials_repeater')): ?>
                    <div class="row g-4 justify-content-center">
                        <?php while (have_rows('testimonials_repeater')) : the_row(); ?>
                            <?php
                            $logo = get_sub_field('logo');
                            $quote = get_sub_field('quote');
                            $image = get_sub_field('image');
                            $name = get_sub_field('name');
                            $background = get_sub_field('background');
                            ?>
                            <div class="col-md-6">
                                <div class="testimonial-card p-5 text-center shadow-sm h-100">
                                    <div class="brand-logo mb-4">
                                        <?php if ($logo) : ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_url($logo['alt']); ?>"
                                                class="mb-4"
                                                height="40">
                                        <?php endif; ?>
                                        <?php if ($quote) : ?>
                                            <p class="mb-4">"<?php echo wp_kses_post($quote); ?>"</p>
                                        <?php endif; ?>
                                        <div class="user-info">
                                            <div class="avatar-placeholder mb-2 mx-auto">
                                                <?php if ($image) : ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>"
                                                        alt="<?php echo esc_url($image['alt']); ?>"
                                                        height="40">
                                                <?php endif; ?>
                                            </div>
                                            <h5 class="fw-bold mb-0"><?php echo wp_kses_post($name); ?></h5>
                                            <small><?php echo wp_kses_post($background); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>