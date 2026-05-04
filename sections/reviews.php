<?php
$reviews = [
    [
        'name'  => 'Sarah M.',
        'loc'   => 'Toledo, OH',
        'stars' => 5,
        'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'name'  => 'James R.',
        'loc'   => 'Columbus, OH',
        'stars' => 5,
        'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'name'  => 'Linda K.',
        'loc'   => 'Cleveland, OH',
        'stars' => 5,
        'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
];
?>

<section class="trc-reviews section-pad">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-sm-5 mb-4">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">Passenger Testimonials</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    What Our Passengers Are Saying
                </h2>
                <p class="trc-section-body">
                    TRC has helped many people in our community regain their independence and reach their
                    medical appointments with peace of mind. Our passengers love our punctuality and our
                    professional drivers. See what they have to say about our service!
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

        <!-- CTA -->
        <div class="text-center">
            <a href="#" class="btn trc-btn-primary btn-lg px-5">
                <i class="bi bi-star-fill me-2"></i>Our Reviews
            </a>
        </div>

    </div>
</section>
