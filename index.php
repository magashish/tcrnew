<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Timely Response Couriers – Non-Emergency Medical Transportation serving Ohio.">
    <title>Timely Response Couriers | NEMT Ohio</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time(); ?>">
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php include 'sections/hero.php'; ?>
    <?php include 'sections/services.php'; ?>
    <?php include 'sections/oneliner.php'; ?>

    <?php
    $hb = [
        'heading' => 'Your Trusted Partner For Medical Transport',
        'sub'     => 'Serving Toledo, Columbus, Cleveland, and Beyond',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/why-choose-us.php'; ?>

    <?php
    $hb = [
        'heading' => 'Ready To Schedule Your Ride?',
        'sub'     => 'Fast Booking and Reliable Service Every Time',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/booking.php'; ?>
    <?php include 'sections/locations.php'; ?>
    <?php include 'sections/faq.php'; ?>
    <?php include 'sections/contact.php'; ?>

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
