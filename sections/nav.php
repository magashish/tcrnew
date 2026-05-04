<?php
$nav_links = [
    ['label' => 'Home',      'href' => 'index.php'],
    ['label' => 'About',     'href' => 'about.php'],
    ['label' => 'Services',  'href' => 'services.php'],
    ['label' => 'Locations', 'href' => 'locations.php'],
    ['label' => 'Contact',   'href' => '#contact'],
];
?>

<nav class="navbar navbar-expand-lg navbar-dark trc-navbar sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand trc-brand" href="index.php">
            <img
                src="assets/images/logo-transparent.png"
                alt="Timely Response Couriers"
                class="trc-logo-img"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';"
            >
            <span class="trc-logo-text" style="display:none;">
                <span class="trc-logo-highlight"><img src="./assets/images/logo-clean.png" class="img-fluid"></span>
            </span>
        </a>

        <!-- Mobile toggle -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#trcNavMenu"
            aria-controls="trcNavMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav links -->
        <div class="collapse navbar-collapse" id="trcNavMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <?php foreach ($nav_links as $link): ?>
                <li class="nav-item">
                    <a
                        class="nav-link trc-nav-link"
                        href="<?php echo htmlspecialchars($link['href']); ?>"
                    >
                        <?php echo htmlspecialchars($link['label']); ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</nav>
