<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Timely Response Couriers – Call or text TRC for non-emergency medical transportation in Toledo, Ohio and surrounding areas.">
    <title>Contact Us | Timely Response Couriers</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css?ver=<?php echo time(); ?>">
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php include 'sections/contact-hero.php'; ?>

    <?php
    $contact_heading = 'Contact Us Today!';
    $contact_body    = 'Give us a call today! We are happy to help answer any questions you may have or get you scheduled for our transportation services. We look forward to serving you by providing you with the best rides in the area.';
    include 'sections/contact.php';
    ?>

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
