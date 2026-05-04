<?php
$reviews = [
    [
        'name'  => 'Patricia T.',
        'loc'   => 'Toledo, OH',
        'stars' => 5,
        'text'  => 'I have been using TRC for my weekly dialysis runs and they are absolutely wonderful. Every driver is kind, on time, and makes me feel like a priority. I cannot recommend them enough!',
    ],
    [
        'name'  => 'Robert J.',
        'loc'   => 'Dayton, OH',
        'stars' => 5,
        'text'  => 'After my hip surgery I needed dependable transportation to my follow-up appointments. TRC was always there right on schedule. Their wheelchair-accessible vehicle was spotless and the driver was incredibly professional.',
    ],
    [
        'name'  => 'Margaret S.',
        'loc'   => 'Columbus, OH',
        'stars' => 5,
        'text'  => 'TRC gave my mother back her independence. She can now get to all of her appointments without relying on family members. The drivers treat her with such care and respect — it truly means the world to us.',
    ],
];
?>

<section class="trc-reviews section-pad" id="about-reviews">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-sm-5 mb-4">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">Passenger Testimonials</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    Real Feedback From Our Valued Passengers
                </h2>
                <p class="trc-section-body">
                    We pride ourselves on the relationships we build with our clients. Our commitment
                    to excellence shows in every ride we provide.
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
