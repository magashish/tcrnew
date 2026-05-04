<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Timely Response Couriers – Ohio's leading non-emergency medical transportation team serving Toledo, Columbus, Cleveland, and beyond.">
    <title>About Us | Timely Response Couriers</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time(); ?>">
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php include 'sections/about-hero.php'; ?>
    <?php include 'sections/about-oneliner.php'; ?>

    <?php
    $hb = [
        'heading' => 'Experience The TRC Difference',
        'sub'     => 'Safety-First Drivers & Clean, Comfortable Vehicles',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/our-story.php'; ?>
    <?php include 'sections/about-services.php'; ?>
    <?php include 'sections/about-reviews.php'; ?>

    <?php
    $hb = [
        'heading' => 'Providing Rides You Can Trust 24/7',
        'sub'     => 'Contact Us To Inquire About Your Next Trip',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/about-booking.php'; ?>
    <?php include 'sections/about-locations.php'; ?>
    <?php include 'sections/about-faq.php'; ?>
    <?php include 'sections/contact.php'; ?>

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
