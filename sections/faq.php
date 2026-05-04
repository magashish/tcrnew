<?php
$faqs = [
    [
        'q' => 'How far in advance should I book my ride?',
        'a' => 'We recommend booking at least 24 to 48 hours in advance to ensure driver availability and allow us to plan the most efficient route for your trip. However, we understand that medical needs can be unpredictable, so we always do our best to accommodate same-day or last-minute requests whenever possible.',
    ],
    [
        'q' => 'Are your vehicles wheelchair accessible?',
        'a' => 'Yes! We have a fleet of fully equipped, ADA-compliant vehicles designed to safely transport passengers who use wheelchairs, scooters, and other mobility devices. Our drivers are trained to assist with boarding and securing mobility equipment so every ride is safe and comfortable.',
    ],
    [
        'q' => 'Do you offer long-distance transport?',
        'a' => 'Absolutely. While we primarily serve communities across Ohio, we can accommodate long-distance medical transportation requests. Please contact us directly to discuss your specific needs and we will work with you to arrange a comfortable, reliable trip to your destination.',
    ],
];
?>

<section class="trc-faq section-pad">
    <div class="container">
        <div class="row align-items-start gy-5">

            <!-- Left: header + CTAs -->
            <div class="col-12 col-lg-5">
                <span class="trc-section-label">Got Questions?</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="trc-section-body mb-5">
                    Navigating transportation options can lead to many questions. We've answered the
                    most common ones here to help you feel confident in choosing TRC for your next trip.
                </p>
                <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3">
                    <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="contact.php" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Get Quote
                    </a>
                </div>
            </div>

            <!-- Right: accordion -->
            <div class="col-12 col-lg-7">
                <div class="accordion trc-accordion" id="trcFaqAccordion">
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
            </div>

        </div>
    </div>
</section>
