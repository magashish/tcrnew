<?php
$reasons = [
    ['icon' => 'bi-person-check-fill',   'label' => 'Professional Drivers'],
    ['icon' => 'bi-house-door-fill',      'label' => 'Door-to-Door Service'],
    ['icon' => 'bi-truck-front-fill',     'label' => 'Modern & Clean Vehicles'],
    ['icon' => 'bi-calendar2-check-fill', 'label' => 'Transparent Scheduling'],
    ['icon' => 'bi-shield-check-fill',    'label' => '100% Safety Commitment'],
];
?>

<section class="trc-why section-pad">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: text + CTAs -->
            <div class="col-12 col-lg-6">
                <span class="trc-section-label">Why Choose TRC</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    We Provide Dependable Transport Services You Can Rely On
                </h2>
                <p class="trc-section-body mb-5">
                    When you need a ride to a medical facility, you need a team that understands the
                    importance of timing and safety. We go the extra mile to make sure every trip is
                    comfortable and stress-free.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="#" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-file-earmark-text-fill me-2"></i>Get Quote
                    </a>
                </div>
            </div>

            <!-- Right: checklist -->
            <div class="col-12 col-lg-6">
                <ul class="trc-why-list list-unstyled mb-0">
                    <?php foreach ($reasons as $reason): ?>
                    <li class="trc-why-item d-flex align-items-center gap-3">
                        <span class="trc-why-icon">
                            <i class="bi <?php echo htmlspecialchars($reason['icon']); ?>"></i>
                        </span>
                        <span class="trc-why-label">
                            <?php echo htmlspecialchars($reason['label']); ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</section>
