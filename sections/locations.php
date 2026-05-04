<?php
$cities = [
    'Toledo','Cleveland','Akron','Mansfield','Westerville','Dublin',
    'Columbus','Defiance','Archbold','Dayton','Lima','Findlay',
    'Tiffin','Ashland','Wooster','Fremont','Sandusky','Lorain',
];
?>

<section class="trc-locations section-pad">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-9 col-lg-7">
                <span class="trc-section-label">Service Areas</span>
                <h2 class="trc-section-heading mt-2 mb-3">
                    Where Do We Offer Transportation Services?
                </h2>
                <p class="trc-section-body">
                    TRC is proud to serve a wide range of communities across Ohio. From our base in
                    Toledo to the streets of Columbus and Cleveland, we are dedicated to helping our
                    neighbors reach their destinations safely.
                </p>
            </div>
        </div>

        <div class="row align-items-start gy-5">

            <!-- Left: city tags + CTAs -->
            <div class="col-12 col-lg-6">
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

            <!-- Right: map placeholder -->
            <div class="col-12 col-lg-6">
                <!--
                    Replace the placeholder below with your Google Maps embed:
                    <iframe
                        src="https://www.google.com/maps/embed?pb=YOUR_EMBED_URL"
                        width="100%" height="420" style="border:0;"
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                -->
                <div class="trc-map-placeholder">
                    <i class="bi bi-map trc-map-placeholder-icon"></i>
                    <p class="trc-map-placeholder-text mt-3 mb-1">Ohio Service Area</p>
                    <p class="trc-map-placeholder-sub mb-0">Interactive map coming soon</p>
                </div>
            </div>

        </div>
    </div>
</section>
