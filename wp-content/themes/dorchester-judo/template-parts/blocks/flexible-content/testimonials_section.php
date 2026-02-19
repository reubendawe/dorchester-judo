<?php
$testimonials = get_sub_field('testimonials_repeater');
if ($testimonials) : ?>

    <section class="testimonials-section py-5">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $chunks = array_chunk($testimonials, 2);
                foreach ($chunks as $index => $chunk) :
                ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="container">
                            <div class="row g-4 justify-content-center">
                                <?php foreach ($chunk as $testimonial) :
                                    $logo = $testimonial['logo'];
                                    $quote = $testimonial['quote'];
                                    $image = $testimonial['image'];
                                    $name = $testimonial['name'];
                                    $background = $testimonial['background'];
                                ?>
                                    <div class="col-md-6">
                                        <div class="testimonial-card p-5 text-center shadow-sm h-100">
                                            <?php if ($logo) : ?>
                                                <img src="<?php echo esc_url($logo['url']); ?>" height="40" class="mb-4">
                                            <?php endif; ?>
                                            <p class="mb-4">"<?php echo wp_kses_post($quote); ?>"</p>
                                            <div class="user-info">
                                                <div class="mb-2 mx-auto">
                                                    <?php if ($image) : ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" class="avatar">
                                                    <?php endif; ?>
                                                </div>
                                                <h5 class="fw-bold mb-0"><?php echo wp_kses_post($name); ?></h5>
                                                <small><?php echo wp_kses_post($background); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" style="z-index: 10;">
                <span class="carousel-control-prev-icon-custom"><i class="bi bi-chevron-left fs-3"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" style="z-index: 10;">
                <span class="carousel-control-next-icon-custom"><i class="bi bi-chevron-right fs-3"></i></span>
            </button>

        </div>
    </section>

<?php endif; ?>

<?php
$testimonials = get_sub_field('testimonials_repeater');
if ($testimonials) : ?>

    <section class="testimonials-section py-5">
        <div class="container">
            <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    $chunks = array_chunk($testimonials, 2);
                    foreach ($chunks as $index => $chunk) :
                    ?>

                        <div class="carousel-item active <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="row px-5">
                                <?php foreach ($chunk as $testimonial) :
                                    $logo = $testimonial['logo'];
                                    $quote = $testimonial['quote'];
                                    $image = $testimonial['image'];
                                    $name = $testimonial['name'];
                                    $background = $testimonial['background'];
                                ?>
                                    <div class="col-md-6">
                                        <div class="testimonial-card card shadow-sm mb-3">
                                            <div class="card-body text-center p-4">
                                            <?php if ($logo) : ?>
                                                <img src="<?php echo esc_url($logo['url']); ?>" height="40" class="mb-4">
                                            <?php endif; ?>
                                            <p class="mb-4">"<?php echo wp_kses_post($quote); ?>"</p>
                                                <div class="user-info">
                                                    <div class="mb-2 mx-auto">
                                                        <?php if ($image) : ?>
                                                            <img src="<?php echo esc_url($image['url']); ?>" class="avatar">
                                                        <?php endif; ?>
                                                    </div>
                                                    <h5 class="fw-bold"><?php echo wp_kses_post($name); ?></h5>
                                                    <small class="text-muted"><?php echo wp_kses_post($background); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

<?php endif; ?>