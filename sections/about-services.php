<?php
$about_services = [
    ['icon' => 'bi-clipboard2-pulse-fill', 'label' => 'Non-Emergency Medical Transport'],
    ['icon' => 'bi-person-wheelchair',      'label' => 'Wheelchair Services'],
    ['icon' => 'bi-heart-pulse-fill',       'label' => 'Hospital Discharge Rides'],
    ['icon' => 'bi-bag-heart-fill',         'label' => 'Senior Shopping Trips'],
    ['icon' => 'bi-hospital-fill',          'label' => 'Specialized Clinic Visits'],
];
?>

<section class="trc-about-services section-pad" id="about-services">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Left: service list -->
            <div class="col-12 col-lg-6">
                <ul class="trc-service-list list-unstyled mb-0">
                    <?php foreach ($about_services as $service): ?>
                    <li class="trc-service-list-item d-flex align-items-center gap-3">
                        <span class="trc-service-list-icon">
                            <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"></i>
                        </span>
                        <span class="trc-service-list-label">
                            <?php echo htmlspecialchars($service['label']); ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Right: text + CTAs -->
            <div class="col-12 col-lg-6">
                <span class="trc-section-label">What We Provide</span>
                <h2 class="trc-section-heading mt-2 mb-4">
                    A Seamless Travel Experience For Every Patient
                </h2>
                <p class="trc-section-body mb-5">
                    We take the stress out of your commute by handling all the logistics of your trip.
                    From the moment we pick you up to the moment you are safely back home, our team
                    is focused on providing a smooth and comfortable experience.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-telephone-fill me-2"></i>Call Now
                    </a>
                    <a href="services.php" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-grid-fill me-2"></i>All Services
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
