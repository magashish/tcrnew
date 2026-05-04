<?php
$services_list = [
    [
        'icon'  => 'bi-clipboard2-pulse-fill',
        'title' => 'Non-Emergency Medical Transportation',
        'text'  => 'Safe, scheduled rides to all your medical appointments with trained, compassionate drivers who understand your needs and put your comfort first.',
    ],
    [
        'icon'  => 'bi-person-wheelchair',
        'title' => 'Wheelchair Accessible Rides',
        'text'  => 'Fully equipped, ADA-compliant vehicles with securing systems designed to safely accommodate wheelchairs, scooters, and other mobility devices.',
    ],
    [
        'icon'  => 'bi-people-fill',
        'title' => 'Senior Citizen Transport',
        'text'  => 'Thoughtful, patient transportation for seniors who need a little extra care and assistance getting safely and comfortably to their destination.',
    ],
    [
        'icon'  => 'bi-droplet-half',
        'title' => 'Dialysis & Treatment Appointments',
        'text'  => 'Consistent, on-time rides for recurring treatments. Never miss another dialysis or therapy session with a dedicated TRC driver by your side.',
    ],
    [
        'icon'  => 'bi-heart-pulse-fill',
        'title' => 'Hospital Discharge Services',
        'text'  => 'Smooth, reliable transport from the hospital to home following procedures or inpatient stays, handled with professionalism and genuine care.',
    ],
    [
        'icon'  => 'bi-signpost-split-fill',
        'title' => 'Long-Distance Medical Trips',
        'text'  => 'We go the extra mile for specialized care, handling longer routes across Ohio with the same comfort, punctuality, and reliability you always expect.',
    ],
];
?>

<section class="trc-services-page section-pad" id="services-list">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">What We Offer</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    A Full Range Of Solutions For Your Mobility Needs
                </h2>
                <p class="trc-section-body">
                    At TRC, we make it easy to find the transportation services that are right for you.
                    We offer a wide variety of solutions to meet any medical or personal need you may have.
                    Through our years of experience, we have created a reliable network of drivers and
                    vehicles you can trust to get you there on time, every time.
                </p>
            </div>
        </div>

        <!-- Service cards -->
        <div class="row g-4 mb-5">
            <?php foreach ($services_list as $service): ?>
            <div class="col-12 col-sm-6">
                <div class="trc-card h-100 text-center p-4">
                    <div class="trc-card-icon mb-4">
                        <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"></i>
                    </div>
                    <h3 class="trc-card-title mb-3">
                        <?php echo htmlspecialchars($service['title']); ?>
                    </h3>
                    <p class="trc-card-text mb-0">
                        <?php echo htmlspecialchars($service['text']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTAs -->
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                <i class="bi bi-telephone-fill me-2"></i>Call Now
            </a>
            <a href="services.php" class="btn trc-btn-dark btn-lg px-5">
                <i class="bi bi-grid-fill me-2"></i>All Services
            </a>
        </div>

    </div>
</section>
