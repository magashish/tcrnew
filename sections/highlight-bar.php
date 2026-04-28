<section class="trc-highlight-bar">
    <div class="container">
        <div class="row align-items-center gy-4">

            <div class="col-12 col-lg-7 text-center text-lg-start">
                <h2 class="trc-hb-heading">
                    <?php echo htmlspecialchars($hb['heading']); ?>
                </h2>
                <?php if (!empty($hb['sub'])): ?>
                <p class="trc-hb-sub mb-0">
                    <?php echo htmlspecialchars($hb['sub']); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="col-12 col-lg-5 d-flex gap-3 flex-wrap justify-content-center justify-content-lg-end">
                <a href="<?php echo htmlspecialchars($hb['cta1']['href']); ?>" class="btn trc-btn-primary btn-lg px-4">
                    <i class="bi <?php echo htmlspecialchars($hb['cta1']['icon']); ?> me-2"></i>
                    <?php echo htmlspecialchars($hb['cta1']['label']); ?>
                </a>
                <a href="<?php echo htmlspecialchars($hb['cta2']['href']); ?>" class="btn trc-btn-outline btn-lg px-4">
                    <i class="bi <?php echo htmlspecialchars($hb['cta2']['icon']); ?> me-2"></i>
                    <?php echo htmlspecialchars($hb['cta2']['label']); ?>
                </a>
            </div>

        </div>
    </div>
</section>
