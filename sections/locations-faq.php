<?php
$faqs = [
    [
        'q' => 'Do you pick up in rural areas outside the main cities?',
        'a' => 'Yes, we serve many of the surrounding towns and rural areas within our service radius. Our goal is to ensure no one is left without reliable transportation regardless of where they live. Give us a call to confirm your specific location and we will do our best to accommodate you.',
    ],
    [
        'q' => 'Can I schedule a recurring ride for weekly appointments?',
        'a' => 'Absolutely. Many of our clients schedule recurring transport for dialysis, physical therapy, or other regular treatments to ensure they always have a guaranteed, reliable ride. We make it easy to set up a consistent schedule that works for you.',
    ],
    [
        'q' => 'Do you offer transport across the state line?',
        'a' => 'While we primarily focus on serving communities across Ohio, we can sometimes accommodate specialized requests for transport to nearby out-of-state areas. Please contact us directly to discuss your specific needs and we will do our best to help.',
    ],
];
?>

<section class="trc-faq section-pad" id="locations-faq">
    <div class="container">
        <div class="row align-items-start gy-4">

            <!-- Left: heading + accordion + CTAs -->
            <div class="col-12 col-lg-6">
                <span class="trc-section-label">Local Information</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    Local Service Information
                </h2>
                <p class="trc-section-body mb-4">
                    Have questions about our coverage area or how we work in your specific
                    neighborhood? We've gathered answers to the most common inquiries from
                    our local passengers.
                </p>

                <div class="accordion trc-accordion mb-5" id="locationsFaqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button
                                class="accordion-button<?php echo $index !== 0 ? ' collapsed' : ''; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#locationsFaq<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="locationsFaq<?php echo $index; ?>"
                            >
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h3>
                        <div
                            id="locationsFaq<?php echo $index; ?>"
                            class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>"
                            data-bs-parent="#locationsFaqAccordion"
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
                    <a href="contact.php" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Get Quote
                    </a>
                </div>
            </div>

            <!-- Right: image -->
            <div class="col-12 col-lg-6">
                <div class="faq-img">
                    <img
                        src="/trcnew284/assets/images/faq.jpg"
                        alt="TRC Locations FAQ"
                    >
                </div>
            </div>

        </div>
    </div>
</section>
