<?php
$faqs = [
    [
        'q' => 'Are your drivers trained in medical safety?',
        'a' => 'Yes, all TRC drivers undergo thorough background checks and complete training in passenger assistance and medical transport safety protocols. We are committed to ensuring every passenger is in capable, caring hands from the moment we pick them up to the moment they arrive safely at their destination.',
    ],
    [
        'q' => 'Can a family member ride with me?',
        'a' => 'In most cases, yes. We understand that many of our passengers feel more comfortable when accompanied by a loved one. Please let us know at the time of booking if you will have an additional rider, and we will do our best to accommodate your request.',
    ],
    [
        'q' => 'What areas of Ohio do you serve?',
        'a' => 'We serve a wide range of communities across Ohio, including Toledo, Columbus, Cleveland, Akron, Dayton, and many surrounding cities. If you are unsure whether we cover your area, please give us a call or send us a text and we will be happy to assist you.',
    ],
];
?>

<section class="trc-faq section-pad" id="about-faq">
    <div class="container">
        <div class="row align-items-start gy-4">

            <!-- Left: heading + accordion + CTAs -->
            <div class="col-12 col-lg-6">
                <span class="trc-section-label">Got Questions?</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="trc-section-body mb-4">
                    We want you to feel completely comfortable when you ride with us.
                </p>

                <div class="accordion trc-accordion mb-5" id="aboutFaqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button
                                class="accordion-button<?php echo $index !== 0 ? ' collapsed' : ''; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#aboutFaq<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="aboutFaq<?php echo $index; ?>"
                            >
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h3>
                        <div
                            id="aboutFaq<?php echo $index; ?>"
                            class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>"
                            data-bs-parent="#aboutFaqAccordion"
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
                        alt="TRC Frequently Asked Questions"
                    >
                </div>
            </div>

        </div>
    </div>
</section>
