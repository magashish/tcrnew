<?php
$faqs = [
    [
        'q' => 'Do you accept insurance for transportation?',
        'a' => 'Coverage varies by provider and plan. Please contact us with your information and we can help determine the best options available for your trip. We are happy to work with you and your provider to make transportation as accessible as possible.',
    ],
    [
        'q' => 'How do you ensure the cleanliness of your vehicles?',
        'a' => 'We sanitize our vehicles daily and between every trip to ensure a clean, healthy, and comfortable environment for every passenger. The health and safety of our clients is always our top priority.',
    ],
    [
        'q' => 'What happens if my appointment runs late?',
        'a' => 'We understand that medical appointments can be unpredictable. Simply let us know and we will adjust accordingly to ensure you still have a reliable ride home. We are flexible and always ready to accommodate our passengers.',
    ],
];
?>

<section class="trc-faq section-pad" id="services-faq">
    <div class="container">
        <div class="row align-items-start gy-4">

            <!-- Left: heading + accordion + CTAs -->
            <div class="col-12 col-lg-6">
                <span class="trc-section-label">Got Questions?</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    Frequent Questions You Need Answers To
                </h2>
                <p class="trc-section-body mb-4">
                    We want your experience with us to be as smooth as possible. Below are a few
                    things our clients often ask about our transport services.
                </p>

                <div class="accordion trc-accordion mb-5" id="servicesFaqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button
                                class="accordion-button<?php echo $index !== 0 ? ' collapsed' : ''; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#servicesFaq<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="servicesFaq<?php echo $index; ?>"
                            >
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h3>
                        <div
                            id="servicesFaq<?php echo $index; ?>"
                            class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>"
                            data-bs-parent="#servicesFaqAccordion"
                        >
                            <div class="accordion-body">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="#" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Get Quote
                    </a>
                </div>
            </div>

            <!-- Right: image -->
            <div class="col-12 col-lg-6">
                <div class="faq-img">
                    <img
                        src="/trcnew284/assets/images/faq.jpg"
                        alt="TRC Services FAQ"
                    >
                </div>
            </div>

        </div>
    </div>
</section>
