<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TRC Service Locations – Non-emergency medical transportation across Toledo, Columbus, Cleveland, Dayton, and 18+ Ohio cities.">
    <title>Locations | Timely Response Couriers</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time(); ?>">
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php include 'sections/locations-hero.php'; ?>
    <?php include 'sections/locations-oneliner.php'; ?>

    <?php
    $hb = [
        'heading' => 'Reliable Rides Throughout The State',
        'sub'     => 'Serving 18+ Cities With Professional Care',
        'cta1'    => ['label' => 'Call Now',  'href' => 'tel:+14197082325', 'icon' => 'bi-telephone-fill'],
        'cta2'    => ['label' => 'Text Now',  'href' => 'sms:+14197082325', 'icon' => 'bi-chat-dots-fill'],
    ];
    include 'sections/highlight-bar.php';
    ?>

    <?php include 'sections/locations-main.php'; ?>
    <?php include 'sections/locations-faq.php'; ?>

    <?php
    $contact_heading = 'Connect With Your Local Transport Pros';
    $contact_body    = 'Ready to have your ride handled by a team from your hometown? Reach out today with any questions and let us know how we can serve you with top-rated transport from TRC.';
    include 'sections/contact.php';
    ?>

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
