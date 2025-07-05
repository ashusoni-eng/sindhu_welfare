<section class="hero-gallery-section">
    <div class="container">
        <h1>Moments That Inspire Change</h1>
        <p>Witness the impact of our work and the lives we've touched through our vibrant photo gallery. Each image
            tells a story of hope, community, and progress.</p>
    </div>
</section>

<section class="container my-5">
    <!-- <h2 class="text-center mb-5 gallery-main-heading border-bottom pb-3  border-3">Captured Moments</h2> -->

    <?php if (! empty($gallery)): ?>
    <?php foreach ($gallery as $session => $types): ?>
    <section class="my-5">
        <!-- Session Title -->
        <h2 class="text-center mb-4 gallery-main-heading border-bottom border-top pt-3 pb-3 border-3">Session
            <?php echo esc($session); ?></h2>

        <!-- Captured Moments (Events) -->
        <h3 class="text-center mt-4 mb-4 gallery-main-heading">Captured Moments</h3>
        <?php if (! empty($types['event'])): ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
            <?php foreach ($types['event'] as $photo): ?>
            <div class="col">
                <?php echo view('Partials/gallery_card', ['photo' => $photo]); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p class="text-center text-muted">No events found for this session.</p>
        <?php endif; ?>

        <!-- Working Committee Meetings -->
        <h3 class="text-center mt-5 mb-4 gallery-main-heading">Working Committee Meetings</h3>
        <?php if (! empty($types['meeting'])): ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
            <?php foreach ($types['meeting'] as $photo): ?>
            <div class="col">
                <?php echo view('Partials/gallery_card', ['photo' => $photo]); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p class="text-center text-muted">No Working Committee Meetings found for this session.</p>
        <?php endif; ?>
    </section>
    <?php endforeach; ?>
    <?php else: ?>
    <p class="text-center">No gallery items found.</p>
    <?php endif; ?>




    <h3 class="text-center mt-4 mb-4 gallery-main-heading">Prativedan</h3>

    <div class="col">
        <!-- <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="/assets/img/event1.jpeg"> -->
        <div class="gallery-item col-3">
            <a href="/assets/prativedan.pdf" target="_blank">
                <img src="/assets/img/gallery/prativedan.png" class="img-fluid" alt="Pradivedan"
                    onerror="this.onerror=null; this.src='/assets/img/gallery/dummy.jpeg';">
            </a>
            <div class="gallery-overlay">
                <p>Partivedan</p>
            </div>
        </div>
    </div>




</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/assets/img/event1.jpeg" class="img-fluid" id="modalImage" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>
