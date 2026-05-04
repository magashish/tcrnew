<?php
$cities = [
    'Toledo','Cleveland','Akron','Mansfield','Westerville','Dublin',
    'Columbus','Defiance','Archbold','Dayton','Lima','Findlay',
    'Tiffin','Ashland','Wooster','Fremont','Sandusky','Lorain',
];
?>

<section class="trc-locations section-pad" id="locations-map">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-12 col-md-9 col-lg-8">
                <span class="trc-section-label">Service Areas</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    We Provide The #1 Transport Service In The Toledo Area
                </h2>
                <p class="trc-section-body">
                    Our team is deeply rooted in the local community and we always put our best foot
                    forward for our neighbors. While our main focus is the Toledo area, we strive to
                    serve clients all the way to Cleveland, Columbus, and Dayton. Our goal is to offer
                    prompt, reliable, and thorough transportation results to everyone in our service zone.
                </p>
            </div>
        </div>

        <!-- Ohio banner -->
        <div class="row">
            <div class="col-12">
                <div class="location-view" style="background-image: url('/trcnew284/assets/images/ohio.jpg');">
                    <h2>OHIO</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-start gy-5">

            <!-- Left: city tags + expand note + CTAs -->
            <div class="col-12 col-lg-6 mt-sm-5 mt-4">
                <div class="trc-city-grid mb-4">
                    <?php foreach ($cities as $city): ?>
                    <span class="trc-city-tag">
                        <i class="bi bi-geo-alt-fill"></i>
                        <?php echo htmlspecialchars($city); ?>
                    </span>
                    <?php endforeach; ?>
                </div>

                <!-- Expanding service area note -->
                <div class="trc-expand-note mb-5">
                    <p>
                        <i class="bi bi-info-circle-fill me-2"></i>
                        If you don't see your city or county on the list, feel free to call anyway.
                        We are always expanding.
                    </p>
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
                    height="420"
                    style="border:0; border-radius: 14px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>
