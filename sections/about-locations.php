<?php
$cities = [
    'Toledo','Cleveland','Akron','Mansfield','Westerville','Dublin',
    'Columbus','Defiance','Archbold','Dayton','Lima','Findlay',
    'Tiffin','Ashland','Wooster','Fremont','Sandusky','Lorain',
];
?>

<section class="trc-locations section-pad" id="about-locations">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">Service Areas</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    Serving The Heart Of Ohio
                </h2>
                <p class="trc-section-body">
                    TRC covers a massive service area to ensure no one is left without a ride.
                </p>
            </div>
        </div>

        <!-- Ohio banner image -->
        <div class="row">
            <div class="col-12">
                <div class="location-view" style="background-image: url('/trcnew284/assets/images/ohio.jpg');">
                    <h2>OHIO</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-start gy-5">

            <!-- Left: city tags + CTAs -->
            <div class="col-12 col-lg-6 mt-sm-5 mt-4">
                <div class="trc-city-grid mb-5">
                    <?php foreach ($cities as $city): ?>
                    <span class="trc-city-tag">
                        <i class="bi bi-geo-alt-fill"></i>
                        <?php echo htmlspecialchars($city); ?>
                    </span>
                    <?php endforeach; ?>
                </div>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="locations.php" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-map-fill me-2"></i>All Locations
                    </a>
                    <a href="contact.php" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-envelope-fill me-2"></i>Contact Us
                    </a>
                </div>
            </div>

            <!-- Right: Google Maps embed -->
            <div class="col-12 col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d779641.821611941!2d-82.26026432734375!3d40.24295452498377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8836e97ab54d8ec1%3A0xe5cd64399c9fd916!2sOhio%2C%20USA!5e0!3m2!1sen!2sin!4v1777621241905!5m2!1sen!2sin"
                    width="100%"
                    height="300"
                    style="border:0; border-radius: 14px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>
