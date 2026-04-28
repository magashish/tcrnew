<?php
$steps = [
    [
        'number' => '01',
        'title'  => 'Call or Text Us',
        'icon'   => 'bi-telephone-fill',
        'text'   => 'Reach out by phone or text to let us know you need a ride. We\'re available to assist you promptly.',
    ],
    [
        'number' => '02',
        'title'  => 'Share Your Details',
        'icon'   => 'bi-clipboard2-check-fill',
        'text'   => 'Provide your pickup address, destination, appointment date, and any special requirements.',
    ],
    [
        'number' => '03',
        'title'  => 'Receive Confirmation',
        'icon'   => 'bi-check-circle-fill',
        'text'   => 'We confirm your booking and assign a vetted, professional driver to your trip.',
    ],
    [
        'number' => '04',
        'title'  => 'We Pick You Up',
        'icon'   => 'bi-geo-alt-fill',
        'text'   => 'Your driver arrives on time and transports you safely and comfortably to your destination.',
    ],
];
?>

<section class="trc-booking section-pad">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">How It Works</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    Our Simple Process For Booking A Ride
                </h2>
                <p class="trc-section-body">
                    Booking your transportation is easier than ever. Simply call or text us with your
                    appointment details, and we will handle the rest, ensuring a driver is ready
                    exactly when you need them.
                </p>
            </div>
        </div>

        <!-- Steps -->
        <div class="row g-4 mb-5">
            <?php foreach ($steps as $step): ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="trc-step-card h-100 text-center p-4">
                    <div class="trc-step-number mb-1"><?php echo $step['number']; ?></div>
                    <div class="trc-step-icon mb-3">
                        <i class="bi <?php echo htmlspecialchars($step['icon']); ?>"></i>
                    </div>
                    <h3 class="trc-step-title mb-2"><?php echo htmlspecialchars($step['title']); ?></h3>
                    <p class="trc-step-text mb-0"><?php echo htmlspecialchars($step['text']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTAs -->
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="tel:+14197082325" class="btn trc-btn-primary btn-lg px-5">
                <i class="bi bi-telephone-fill me-2"></i>Call Now
            </a>
            <a href="#" class="btn trc-btn-dark btn-lg px-5">
                <i class="bi bi-file-earmark-fill me-2"></i>Online Form
            </a>
        </div>

    </div>
</section>
