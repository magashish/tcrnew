<?php
$reviews = [
    [
        'name'  => 'Dorothy H.',
        'loc'   => 'Toledo, OH',
        'stars' => 5,
        'text'  => 'I have never had a more reliable transport service. TRC picks me up for my treatments every single week without fail. The drivers are kind, patient, and always on time. I cannot imagine doing this without them.',
    ],
    [
        'name'  => 'Marcus B.',
        'loc'   => 'Findlay, OH',
        'stars' => 5,
        'text'  => 'The wheelchair accessibility is top notch. Everything is clean, the ramp works smoothly, and the driver made sure I was securely strapped in before we moved. This is how transport should always be done.',
    ],
    [
        'name'  => 'Carol W.',
        'loc'   => 'Akron, OH',
        'stars' => 5,
        'text'  => 'After my hospital discharge I was nervous about getting home safely. TRC made the whole experience calm and easy. Professional, courteous, and incredibly smooth ride. I will be using them for all future trips.',
    ],
];
?>

<section class="trc-reviews section-pad" id="services-reviews">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-sm-5 mb-4">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">Passenger Testimonials</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    What Our Customers Are Saying
                </h2>
                <p class="trc-section-body">
                    We have helped many of our valued clients stay on top of their health with top-quality
                    transportation services they love! But don't just take our word for it.
                </p>
            </div>
        </div>

        <!-- Review cards -->
        <div class="row g-4 mb-5">
            <?php foreach ($reviews as $review): ?>
            <div class="col-12 col-lg-4">
                <div class="trc-review-card h-100 p-4">
                    <div class="trc-stars mb-3">
                        <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                        <i class="bi bi-star-fill"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="trc-review-text mb-4">
                        "<?php echo htmlspecialchars($review['text']); ?>"
                    </p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <div class="trc-reviewer-avatar">
                            <?php echo htmlspecialchars(substr($review['name'], 0, 1)); ?>
                        </div>
                        <div>
                            <p class="trc-reviewer-name mb-0"><?php echo htmlspecialchars($review['name']); ?></p>
                            <p class="trc-reviewer-loc mb-0"><?php echo htmlspecialchars($review['loc']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTAs -->
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="#" class="btn trc-btn-primary btn-lg px-5">
                <i class="bi bi-star-fill me-2"></i>Our Reviews
            </a>
            <a href="https://www.google.com/maps/search/?api=1&query=Timely+Response+Couriers" target="_blank" rel="noopener" class="btn trc-btn-dark btn-lg px-5">
                <i class="bi bi-google me-2"></i>Google Reviews
            </a>
        </div>

    </div>
</section>
