<?php
$faqs = [
    [
        'q' => 'How far in advance should I book my ride?',
        'a' => 'We recommend booking at least 24 to 48 hours in advance...',
    ],
    [
        'q' => 'Are your vehicles wheelchair accessible?',
        'a' => 'Yes! We have a fleet...',
    ],
    [
        'q' => 'Do you offer long-distance transport?',
        'a' => 'Absolutely...',
    ],
];
?>

<section class="trc-faq section-pad">
    <div class="container">
        <div class="row align-items-start gy-4">

            <!-- Left: header + CTAs -->

            <div class="col-12 col-lg-6">
                <span class="trc-section-label">Got Questions?</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="trc-section-body">
                    Navigating transportation options can lead to many questions. We've answered the
                    most common ones here to help you feel confident in choosing TRC for your next trip.
                </p>
                <div class="accordion trc-accordion mb-5" id="trcFaqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button
                                class="accordion-button<?php echo $index !== 0 ? ' collapsed' : ''; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="faq<?php echo $index; ?>"
                            >
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h3>
                        <div
                            id="faq<?php echo $index; ?>"
                            class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>"
                            data-bs-parent="#trcFaqAccordion"
                        >
                            <div class="accordion-body">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3">
                    <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="#" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Get Quote
                    </a>
                </div>
            </div>

            <!-- Right: accordion -->
            <div class="col-12 col-lg-6">
                <div class="faq-img">
                    <img src="/trcnew284/assets/images/faq.jpg">
                </div>
            </div>

        </div>
    </div>
</section>


