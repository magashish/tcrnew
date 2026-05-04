<?php
$cities = [
    'Toledo','Cleveland','Akron','Mansfield','Westerville','Dublin',
    'Columbus','Defiance','Archbold','Dayton','Lima','Findlay',
    'Tiffin','Ashland','Wooster','Fremont','Sandusky','Lorain',
];
?>

<section class="trc-locations section-pad" id="location-sec">
    <div class="container">

        <!-- Section header -->
        <div class="row justify-content-center text-center mb-4">
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

        <div class="row">
            <div class="col-12">
                <div class="location-view" style="background-image: url(/trcnew284/assets/images/ohio.jpg);">
                    <h2>OHIO</h2>
                </div>
            </div>
        </div>


        <div class="row align-items-start gy-5">

            <!-- Left: city tags -->
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
                    <a href="#" class="btn trc-btn-primary btn-lg px-5">
                        <i class="bi bi-map-fill me-2"></i>All Locations
                    </a>
                    <a href="#contact" class="btn trc-btn-dark btn-lg px-5">
                        <i class="bi bi-envelope-fill me-2"></i>Contact Us
                    </a>
                </div>
            </div>

            <!-- Right: map placeholder -->
            <div class="col-12 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d779641.821611941!2d-82.26026432734375!3d40.24295452498377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8836e97ab54d8ec1%3A0xe5cd64399c9fd916!2sOhio%2C%20USA!5e0!3m2!1sen!2sin!4v1777621241905!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <div class="trc-map-placeholder">
                    <i class="bi bi-map trc-map-placeholder-icon"></i>
                    <p class="trc-map-placeholder-text mt-3 mb-1">Ohio Service Area</p>
                    <p class="trc-map-placeholder-sub mb-0">Interactive map coming soon</p>
                </div> -->
            </div>

        </div>
    </div>
</section>
