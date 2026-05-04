<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TRC Services – Non-emergency medical transportation, wheelchair rides, senior transport, dialysis trips, hospital discharges, and long-distance medical travel across Ohio.">
    <title>Services | Timely Response Couriers</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time(); ?>">
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php include 'sections/services-hero.php'; ?>
    <?php include 'sections/services-oneliner.php'; ?>

    <?php
    $hb = [
        'heading' => 'Safety, Punctuality, and Peace of Mind',
        'sub'     => 'Book Your Professional Medical Transport Today',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/services-list.php'; ?>
    <?php include 'sections/services-reviews.php'; ?>
    <?php include 'sections/services-booking.php'; ?>
    <?php include 'sections/services-locations.php'; ?>
    <?php include 'sections/services-faq.php'; ?>

    <?php
    $contact_heading = 'Get Your Free Transport Estimate Today';
    $contact_body    = "Don't let a lack of transportation stand in the way of your health. Contact TRC today and let us show you how easy it is to get where you need to go.";
    include 'sections/contact.php';
    ?>

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
