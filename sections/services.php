<?php
$services = [
    [
        'title' => 'Medical Appointment Transport',
        'icon'  => 'bi-clipboard2-pulse-fill',
        'text'  => 'Dependable, on-time rides to and from routine checkups, specialist visits, and every medical appointment in between — so you can focus on your health, not logistics.',
    ],
    [
        'title' => 'Dialysis Appointment Rides',
        'icon'  => 'bi-droplet-half',
        'text'  => 'Consistent, scheduled transportation for dialysis patients who need reliable pickup and drop-off multiple times a week, without fail.',
    ],
    [
        'title' => 'Hospital Discharges',
        'icon'  => 'bi-heart-pulse-fill',
        'text'  => 'Safe and comfortable transport home after hospital stays, ensuring a smooth transition from care facility to your front door with trained, compassionate drivers.',
    ],
    [
        'title' => 'Wheelchair Accessible Rides',
        'icon'  => 'bi bi-person-wheelchair',
        'text'  => 'Fully equipped, ADA-compliant vehicles designed to accommodate wheelchairs and mobility devices, so every client travels safely and with dignity.',
    ],
];
?>

<section class="trc-services section-pad" id="service-sec">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-md-5 mb-4">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">What We Offer</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    Transportation Solutions Tailored To You
                </h2>
                <p class="trc-section-body">
                    We understand that getting to your destination safely is your top priority.
                    Whether it is a routine checkup or a specialized medical appointment, we
                    provide a full range of non-emergency transportation services to ensure you
                    never have to worry about how you'll get there.
                </p>
            </div>
        </div>

        <!-- Service cards -->
        <div class="row g-4 justify-content-center">
            <!-- <?php //foreach ($services as $service): ?> -->



                <div class="col-12 col-sm-6">
                    <div class="trc-card h-100 text-center p-4">
                        
                        <div class="services-img" style="background-image: url(/trcnew284/assets/images/img1.jpg);"></div>

                        <h3 class="trc-card-title mb-3">
                            Medical Appointment Transport
                        </h3>
                        <p class="trc-card-text mb-0">
                            Dependable, on-time rides to and from routine checkups, specialist visits, and every medical appointment in between — so you can focus on your health, not logistics.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="trc-card h-100 text-center p-4">
                        
                        <div class="services-img" style="background-image: url(/trcnew284/assets/images/img2.jpg);"></div>

                        <h3 class="trc-card-title mb-3">
                            Dialysis Appointment Rides
                        </h3>
                        <p class="trc-card-text mb-0">
                            Consistent, scheduled transportation for dialysis patients who need reliable pickup and drop-off multiple times a week, without fail.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="trc-card h-100 text-center p-4">
                        
                        <div class="services-img" style="background-image: url(/trcnew284/assets/images/img3.jpg);"></div>

                        <h3 class="trc-card-title mb-3">
                            Hospital Discharges
                        </h3>
                        <p class="trc-card-text mb-0">
                            Safe and comfortable transport home after hospital stays, ensuring a smooth transition from care facility to your front door with trained, compassionate drivers.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="trc-card h-100 text-center p-4">
                        
                        <div class="services-img" style="background-image: url(/trcnew284/assets/images/img4.jpg);"></div>

                        <h3 class="trc-card-title mb-3">
                            Wheelchair Accessible Rides
                        </h3>
                        <p class="trc-card-text mb-0">
                            Fully equipped, ADA-compliant vehicles designed to accommodate wheelchairs and mobility devices, so every client travels safely and with dignity.
                        </p>
                    </div>
                </div>





                <!--WAS-->

            <!-- <div class="col-12 col-sm-6">
                <div class="trc-card h-100 text-center p-4">
                    <div class="trc-card-icon mb-4">
                        <i class="bi <?php //echo htmlspecialchars($service['icon']); ?>"></i>
                    </div>
                    <h3 class="trc-card-title mb-3">
                        <?php ///echo htmlspecialchars($service['title']); ?>
                    </h3>
                    <p class="trc-card-text mb-0">
                        <?php //echo htmlspecialchars($service['text']); ?>
                    </p>
                </div>
            </div> -->
            <?php //endforeach; ?>
        </div>

    </div>
</section>
